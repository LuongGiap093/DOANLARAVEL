<?php
namespace App\Http\Controllers\user;

use App\Models\AccountCustomer;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Logo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;
use App\Http\Requests\RegisterRequest;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class AccountCustomerController extends Controller
{
    public function __construct()
    {

    }

    public function getLogin()
    {
        $logos = Logo::first();
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->limit(4)->get();
        $cate=Category::orderby('category_position','asc')
            ->join('product','category.category_id','=','product.idcat')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->get();

        if (Auth::guard('account_customer')->check()) {
            return view('user.page.home.loginCustomer', compact('logos', 'categorys'));

        } else {
            return view('user.page.home.loginCustomer', compact('logos','cate', 'categorys'));
        }
    }
//
//    public function index()
//    {
//        $logos = Logo::first();
//        $brands = Brand::all();
//        $categorys = Category::where('category_status', 1)->orderby('category_position', 'asc')->get();
//
//        if (Auth::guard('account_customer')->check()) {
//            return view('frontend.page.login_page.login', compact('logos', 'brands', 'categorys'));
//
//        } else {
//            return view('frontend.page.login_page.login', compact('logos', 'brands', 'categorys'));
//        }
//    }

    public function postadd(RegisterRequest $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $pass = $request->password;

        require "app/PHPMailer-master/src/PHPMailer.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
        require "app/PHPMailer-master/src/SMTP.php"; //nhúng thư viện vào để dùng
        require 'app/PHPMailer-master/src/Exception.php'; //nhúng thư viện vào để dùng
        $mail = new PHPMailer(true);  //true: enables exceptions
        try {
            $mail->SMTPDebug = 2;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $nguoigui = 'dinhtrongak123@gmail.com';
            $matkhau = 'Honghao170400';
            $tennguoigui = 'TLmobile';
            $mail->Username = $nguoigui; // SMTP username
            $mail->Password = $matkhau;   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL
            $mail->Port = 465;  // port to connect to
            $mail->setFrom($nguoigui, $tennguoigui);
            $to = $email;
            $to_name = $name;

            $mail->addAddress($to, $to_name); //mail và tên người nhận
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = "Mail xác nhận đăng ký tài khoản thành viên trên TLmobile";
            $noidungthu = "<b>Chào bạn!</b><br>Chúc an lành!";
            $mail->Body = $noidungthu;
            $mail->smtpConnect(array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            if (!$mail->Send()) {
                echo "<h1>Loi khi goi mail: " . $mail->ErrorInfo . '</h1>';
            } else {
                $user = new AccountCustomer();
                $email = $request->email;
                $accountcustomer = AccountCustomer::all();
                foreach ($accountcustomer as $acc) {
                    if ($email == $acc->email) {
                        Session::flash('message', 'Email đã được đăng ký!');
                        return redirect()
                            ->back();
                    }
                }
                $user->name = $name;
                $user->phone = $phone;
                $user->email = $email;
                $user->password = Hash::make($pass);
                if ($user->save()) {
                    $login = [
                        'email' => $email,
                        'password' => $pass,
                    ];

                    if (Auth::guard('account_customer')->attempt($login)) {
                        return redirect()->route('shopping.home');
                    }
                } else {
                    return redirect()->back()->with('success', 'Đăng ký không thành công');
                }
            }
        } catch (Exception $e) {
            return redirect()->back()->with('success', 'Đăng ký không thành công');
//            echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
        }


//        $user = new AccountCustomer();
//        $email = $request->email;
//        $accountcustomer = AccountCustomer::all();
//        foreach ($accountcustomer as $acc) {
//            if ($email == $acc->email) {
//                Session::flash('message', 'Email đã được đăng ký!');
//                return redirect()
//                    ->back();
//            }
//        }
//        $user->name = $request->name;
//        $user->phone = $request->phone;
//        $user->email = $request->email;
//        $user->password = Hash::make($request->password);
//        if ($user->save()) {
//            $login = [
//                'email' => $request->email,
//                'password' => $request->password,
//            ];
//
//            if (Auth::guard('account_customer')->attempt($login)) {
//                return redirect()->route('shopping.home');
//            }
//        } else {
//            return redirect()->back()->with('success', 'Đăng ký không thành công');
//        }

    }


    public function postLogin(request $request)
    {
        $logos = Logo::first();
        $categorys = Category::all();
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('account_customer')->attempt($login)) {

//      return view('user.page.loginCustomer',compact('logos','categorys'))->with('status', 'Đang nhập thành công');
            return redirect()->route('shopping.home');
        } else {
            return redirect()
                ->back()
                ->with('status', 'Email hoặc Mật khẩu không chính xác');
        }
    }

    public function getLogout()
    {
        Auth::guard('account_customer')->logout();
        return redirect()
            ->back();
    }

    public function profiles(){
        $logos = Logo::first();
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->limit(4)->get();
        $cate=Category::orderby('category_position','asc')
            ->join('product','category.category_id','=','product.idcat')
            ->join('brands','product.brand_id','=','brands.brand_id')
            ->get();
        $accountcustomer=AccountCustomer::all();
        return view('user.page.profiles',compact('accountcustomer','logos','categorys','cate'));
    }
}

?>
