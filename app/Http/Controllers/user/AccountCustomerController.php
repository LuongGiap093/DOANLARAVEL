<?php
namespace App\Http\Controllers\user;

use App\Models\AccountCustomer;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Logo;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Str;
use Auth;
use Validator;
use Illuminate\Support\Facades\Session;
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
        $categorys = Category::where('category_status', 1)->orderby('category_position', 'asc')->limit(4)->get();
        $cate = Category::orderby('category_position', 'asc')
            ->join('product', 'category.category_id', '=', 'product.idcat')
            ->join('brands', 'product.brand_id', '=', 'brands.brand_id')
            ->whereBetween('category_position',[1,10])
            ->get();
        if (Auth::guard('account_customer')->check()) {
            return redirect()->route('shopping.home');
        } else {
            return view('user.page.home.loginCustomer', compact('logos', 'cate', 'categorys'));
        }
    }

    public function postadd(RegisterRequest $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $pass = $request->password;
        $token=strtoupper(Str::random(20));
        $accountcustomer = AccountCustomer::where('email','=',$email)->first();
        if($accountcustomer===null){
            $user = new AccountCustomer();
            $user->name = $name;
            $user->phone = $phone;
            $user->email = $email;
            $user->password = Hash::make($pass);
            $user->token=$token;
            $user->save();
            require "app/PHPMailer-master/src/PHPMailer.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
            require "app/PHPMailer-master/src/SMTP.php"; //nhúng thư viện vào để dùng
            require 'app/PHPMailer-master/src/Exception.php'; //nhúng thư viện vào để dùng
            $mail = new PHPMailer(true);  //true: enables exceptions
            try{
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
                $mail->CharSet = 'UTF-8';
                $mail->setFrom($nguoigui, $tennguoigui);
                $to = $email;
                $to_name = $name;

                $mail->addAddress($to, $to_name); //mail và tên người nhận
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = "Mail xác nhận đăng ký tài khoản thành viên trên TLmobile";
                $cus_id=$user->id;
                $noidungthu = "<p style='display: contents;'>Xin chào, </p> <b>".$name."</b><br><p>Để kích hoạt tài khoản của bạn - vui lòng click vào link bên dưới.</p>
                                                <a href='".route('customer.actived',['customer'=>$cus_id,'token'=>$token])."'>".route('customer.actived',['customer'=>$cus_id,'token'=>$token])."</a><br><p>Xin cảm ơn!</p>";
                $mail->Body = $noidungthu;
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
                if (!$mail->Send()) {
                    $user->delete();
                    return redirect()->back()->with('error','Chúng tôi không thể gửi email xác minh cho bạn được.');
//
            } else {
                    return redirect()->back()->with('success','Làm ơn click vào đường link chúng tôi đã gửi qua email của bạn để xác minh danh tính!');
                }
            }catch (Exception $e) {
                $user->delete();
                return redirect()->back()->with('error','Đã có lỗi xảy ra! Đăng ký không thành công');
            }

        }else{
            return redirect()->back()->with('error', 'Email đã được đăng ký cho tài khoản khác');
        }
    }

    public function postLogin(request $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $check_login=Auth::guard('account_customer')->attempt($login);
        if ($check_login) {
            if(Auth::guard('account_customer')->user()->status==0){
                Auth::guard('account_customer')->logout();
                return redirect()->back()->with('status', 'Tài khoản chưa được kích hoạt.');
            }
            return redirect()->back()->with('status', 'Bạn đã đăng nhập tài khoản thành công');
        }else {
            return redirect()->back()->with('status', 'Email hoặc Mật khẩu không chính xác');
        }
    }

    public function getLogout()
    {
        Auth::guard('account_customer')->logout();
        return redirect()->back()->with('status', 'Bạn đã đăng xuất thành công');
    }

    public function profiles()
    {
        if (Auth::guard('account_customer')->check()) {
            $logos = Logo::first();
            $categorys = Category::where('category_status', 1)->orderby('category_position', 'asc')->limit(4)->get();
            $cate = Category::orderby('category_position', 'asc')
                ->join('product', 'category.category_id', '=', 'product.idcat')
                ->join('brands', 'product.brand_id', '=', 'brands.brand_id')
                ->whereBetween('category_position',[1,10])
                ->get();
            $accountcustomer = AccountCustomer::all();
            $wishlists = Wishlist::where('customer_id', Auth::guard('account_customer')->id())->get();
            return view('user.page.profiles', compact('wishlists', 'accountcustomer', 'logos', 'categorys', 'cate'));
        } else {
            return redirect()->route('shopping.login');
        }
    }

    public function actived(AccountCustomer $customer,$token)
    {
        if($customer->token ===$token)
        {
            $customer->update(['token'=>null,'status'=>1]);
            $login = [
                'email' => $customer->email,
                'password' => $customer->password,
            ];
            if(Auth::guard('account_customer')->attempt($login)) {
                return redirect()->route('shopping.login')->with('success','Xác minh tài khoản thành công!');;
            }else{
                Auth::guard('account_customer')->attempt($login);
                return redirect()->route('shopping.login')->with('success','Xác minh tài khoản thành công!');;
            }
        }else{
            return redirect()->route('shopping.login')->with('success','Mã xác nhận không hợp lệ!');
        }
    }
    public function forgot_page()
    {
        $logos = Logo::first();
        $categorys = Category::where('category_status', 1)->orderby('category_position', 'asc')->limit(4)->get();
        $cate = Category::orderby('category_position', 'asc')
            ->join('product', 'category.category_id', '=', 'product.idcat')
            ->join('brands', 'product.brand_id', '=', 'brands.brand_id')
            ->whereBetween('category_position',[1,10])
            ->get();
        if (Auth::guard('account_customer')->check()) {
            return redirect()->route('shopping.home');
        } else {
            return view('user.page.account_customer.forgot_password', compact('logos', 'cate', 'categorys'));
        }
    }
    public function forgot(Request $request)
    {
        $email = $request->email;
        $accountcustomer = AccountCustomer::where('email','=',$email)->first();
        if($accountcustomer===null){
            return redirect()->back()->with('forgot','Email không tồn tại!');
        }else{
            $forgot_pass=strtoupper(Str::random(10));
            $accountcustomer->update(['forgot'=>$forgot_pass]);
            require "app/PHPMailer-master/src/PHPMailer.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
            require "app/PHPMailer-master/src/SMTP.php"; //nhúng thư viện vào để dùng
            require 'app/PHPMailer-master/src/Exception.php'; //nhúng thư viện vào để dùng
            $mail = new PHPMailer(true);  //true: enables exceptions
            try{
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
                $mail->CharSet = 'UTF-8';
                $mail->setFrom($nguoigui, $tennguoigui);
                $to = $email;
                $to_name = $accountcustomer->name;

                $mail->addAddress($to, $to_name); //mail và tên người nhận
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = "Mail xác nhận đăng ký tài khoản thành viên trên TLmobile";
                $cus_id=$accountcustomer->id;
                $noidungthu = "<p style='display: contents;'>Xin chào, </p> <b>".$to_name."</b><br><p>Hãy click vào link bên dưới để tiếng hành đổi lại mật khẩu của bạn.</p>
                                                <a href='".route('customer.activedforgot',['customer'=>$cus_id,'forgot'=>$forgot_pass])."'>".route('customer.activedforgot',['customer'=>$cus_id,'forgot'=>$forgot_pass])."</a><br><p>Xin cảm ơn!</p>";
                $mail->Body = $noidungthu;
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
                if (!$mail->Send()) {
                    $accountcustomer->update(['forgot'=>null]);
                    return redirect()->back()->with('error','Chúng tôi không thể gửi email xác minh cho bạn được.');
//                echo "<h1>Loi khi goi mail: " . $mail->ErrorInfo . '</h1>';
                } else {
                    return redirect()->back()->with('success','Làm ơn click vào đường link chúng tôi đã gửi qua email của bạn để đổi lại mật khẩu!');
                }
            }catch (Exception $e) {
                return redirect()->back()->with('error','Đã có lỗi xảy ra! Lấy lại mật khẩu không thành công');
            }
        }
    }
    public function actived_forgot(AccountCustomer $customer,$forgot)
    {
        $logos = Logo::first();
        $categorys = Category::where('category_status', 1)->orderby('category_position', 'asc')->limit(4)->get();
        $cate = Category::orderby('category_position', 'asc')
            ->join('product', 'category.category_id', '=', 'product.idcat')
            ->join('brands', 'product.brand_id', '=', 'brands.brand_id')
            ->whereBetween('category_position',[1,10])
            ->get();
        if($customer->forgot ===$forgot)
        {
            $check=true;
            return view('user.page.account_customer.change_pass', compact('customer', 'check','logos', 'cate', 'categorys'));

        }else{
            return redirect()->route('shopping.login')->with('error','Mã xác nhận không hợp lệ!');
        }
    }

    public function change_pass_page()
    {
        if (Auth::guard('account_customer')->check()) {
            $logos = Logo::first();
            $categorys = Category::where('category_status', 1)->orderby('category_position', 'asc')->limit(4)->get();
            $cate = Category::orderby('category_position', 'asc')
                ->join('product', 'category.category_id', '=', 'product.idcat')
                ->join('brands', 'product.brand_id', '=', 'brands.brand_id')
                ->whereBetween('category_position',[1,10])
                ->get();
            $wishlists = Wishlist::where('customer_id', Auth::guard('account_customer')->id())->get();
            return view('user.page.account_customer.change_pass', compact('logos', 'cate', 'categorys','wishlists'));

        } else {
            return redirect()->route('shopping.login')->with('status','Hãy đăng nhập trước khi đổi mật khẩu.');
        }
    }

    public function check_change_pass(Request $request)
    {
        $email = $request->email;
        $old_pass = $request->old_password;
        $pass = $request->password;
        $comfirm_pass = $request->comfirm_password;
        if($pass===$comfirm_pass){
            $accountcustomer = AccountCustomer::where('email','=',$email)->where('password','=',$old_pass)->first();
            if($accountcustomer===null){
                return redirect()->back()->with('error','Mật khẩu không chính xác. vui lòng nhập lại!');
            }else{
                $accountcustomer->update(['forgot'=>null,'password'=>Hash::make($pass)]);
                if(Auth::guard('account_customer')->check()){
                    Auth::guard('account_customer')->logout();
                    return redirect()->route('shopping.login')->with('success','Đổi mật khẩu thành công. Hãy đăng nhập lại!');
                }else{
                    return redirect()->route('shopping.login')->with('success','Đổi mật khẩu thành công!');
                }
            }
        }else{
            return redirect()->back()->with('error','Nhập lại mật khẩu không trùng khớp!');
        }

    }
    public function check_change_pass1(Request $request)
    {
        $email = $request->email;
        $pass = $request->password;
        $comfirm_pass = $request->comfirm_password;
        $login = [
            'email' => $request->email,
            'password' => $request->old_password,
        ];
        $check_login=Auth::guard('account_customer')->attempt($login);
        if($check_login){
            if($pass===$comfirm_pass){
                $accountcustomer = AccountCustomer::where('email','=',$email)->first();
                if($accountcustomer===null){
                    return redirect()->back()->with('change','Email không tồn tại!');
                }else{
                    $accountcustomer->update(['forgot'=>null,'password'=>Hash::make($pass)]);
                    if(Auth::guard('account_customer')->check()){
                        Auth::guard('account_customer')->logout();
                        return redirect()->route('shopping.login')->with('success','Đổi mật khẩu thành công. Hãy đăng nhập lại!');
                    }else{
                        return redirect()->route('shopping.login')->with('success','Đổi mật khẩu thành công!');
                    }
                }
            }else{
                return redirect()->back()->with('error','Nhập lại mật khẩu không trùng khớp!');
            }
        }else{
            return redirect()->back()->with('error','Mật khẩu cũ không chính xác!');
        }
    }

}

?>
