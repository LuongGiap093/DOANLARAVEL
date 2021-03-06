<?php
namespace App\Http\Controllers\user;

use App\Classes\Helper;
use App\Models\AccountCustomer;
use App\Models\Brand;
use App\Models\Category;
use App\Models\City;
use App\Models\Feeship;
use App\Models\Logo;
use App\Models\Order;
use App\Models\Province;
use App\Models\Wards;
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
            require "app/PHPMailer-master/src/PHPMailer.php";  //nh??ng th?? vi???n v??o ????? d??ng, s???a l???i ???????ng d???n cho ????ng n???u b???n l??u v??o ch??? kh??c
            require "app/PHPMailer-master/src/SMTP.php"; //nh??ng th?? vi???n v??o ????? d??ng
            require 'app/PHPMailer-master/src/Exception.php'; //nh??ng th?? vi???n v??o ????? d??ng
            $mail = new PHPMailer(true);  //true: enables exceptions
            try{
                $mail->SMTPDebug = 2;  // 0,1,2: ch??? ????? debug. khi m???i c???u h??nh ?????u t???t th?? ch???nh l???i 0 nh??
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

                $mail->addAddress($to, $to_name); //mail v?? t??n ng?????i nh???n
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = "Mail x??c nh???n ????ng k?? t??i kho???n th??nh vi??n tr??n TLmobile";
                $cus_id=$user->id;
                $noidungthu = "<p style='display: contents;'>Xin ch??o, </p> <b>".$name."</b><br><p>????? k??ch ho???t t??i kho???n c???a b???n - vui l??ng click v??o link b??n d?????i.</p>
                                                <a href='".route('customer.actived',['customer'=>$cus_id,'token'=>$token])."'>".route('customer.actived',['customer'=>$cus_id,'token'=>$token])."</a><br><p>Xin c???m ??n!</p>";
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
                    return redirect()->back()->with('error','Ch??ng t??i kh??ng th??? g???i email x??c minh cho b???n ???????c.');
//
            } else {
                    return redirect()->back()->with('success','L??m ??n click v??o ???????ng link ch??ng t??i ???? g???i qua email c???a b???n ????? x??c minh danh t??nh!');
                }
            }catch (Exception $e) {
                $user->delete();
                return redirect()->back()->with('error','???? c?? l???i x???y ra! ????ng k?? kh??ng th??nh c??ng');
            }

        }else{
            return redirect()->back()->with('error', 'Email ???? ???????c ????ng k?? cho t??i kho???n kh??c');
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
                return redirect()->back()->with('status', 'T??i kho???n ch??a ???????c k??ch ho???t.');
            }


            $customer=AccountCustomer::where('id',Auth::guard('account_customer')->id())->first();
            if($customer->city!=null&&$customer->province!=null&&$customer->wards!=null&&$customer->address!=null){
                $feeship=Feeship::where('fee_matp',$customer->city)->where('fee_maqh',$customer->province)->where('fee_xaid',$customer->wards)->get();
                if($feeship){
                    $count_feeship=$feeship->count();
                    if($count_feeship>0){
                        foreach ($feeship as $Key=>$fee){
                            Session::put('fee',$fee->fee_feeship);
                            Session::save();
                            if(Session::get('fee')){
                                $shipping[]=array('fee_matp'=>$customer->city,
                                    'fee_maqh'=>$customer->province,
                                    'fee_xaid'=>$customer->wards,
                                    'name'=>$customer->name,
                                    'phone'=>$customer->phone,
                                    'email'=>$customer->email,
                                    'address'=>$customer->address,
                                    'note'=>'');
                                Session::put('shipping',$shipping);
                                Session::save();
                            }
                        }
                    }else{
                        $shipping[]=array('fee_matp'=>$customer->city,
                            'fee_maqh'=>$customer->province,
                            'fee_xaid'=>$customer->wards,
                            'name'=>$customer->name,
                            'phone'=>$customer->phone,
                            'email'=>$customer->email,
                            'address'=>$customer->address,
                            'note'=>'');
                        Session::put('fee',50000);
                        if(Session::get('fee')){
                            Session::put('shipping',$shipping);
                            Session::save();
                        }
                        Session::save();
                    }
                }
            }else{
//                Session::forget('shipping');
//                Session::forget('fee');
            }


            return redirect()->back()->with('status', 'B???n ???? ????ng nh???p t??i kho???n th??nh c??ng');
        }else {
            return redirect()->back()->with('status', 'Email ho???c M???t kh???u kh??ng ch??nh x??c');
        }
    }

    public function getLogout()
    {
        Auth::guard('account_customer')->logout();
        Session::flush();
        return redirect()->back()->with('status', 'B???n ???? ????ng xu???t th??nh c??ng');
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
            $accountcustomer = AccountCustomer::where('id','=',Auth::guard('account_customer')->id())->first();

            $order=Order::where('customer_id','=',Auth::guard('account_customer')->id())->get();

            $wishlists = Wishlist::where('customer_id', Auth::guard('account_customer')->id())->get();
            $city=City::orderby('matp','ASC')->get();
            if($accountcustomer->city!=null){
                $x_city=City::where('matp',$accountcustomer->city)->first();
                $name_city=$x_city->name_city;
                $x_province=Province::where('maqh',$accountcustomer->province)->first();
                $name_province=$x_province->name_quanhuyen;
                $x_wards=Wards::where('xaid',$accountcustomer->wards)->first();
                $name_wards=$x_wards->name_xaphuong;
                $province=Province::where('matp',$accountcustomer->city)->get();
                $wards=Wards::where('maqh',$accountcustomer->province)->get();
            }else{
                $name_city=null;
                $name_province=null;
                $name_wards=null;
                $province=null;
                $wards=null;
            }
            return view('user.page.account_customer.profiles', compact('order','province','wards','name_city','name_province','name_wards','city','wishlists', 'accountcustomer', 'logos', 'categorys', 'cate'));
        } else {
            return redirect()->route('shopping.login');
        }
    }

    public function create_profiles(Request $request){
        if (Auth::guard('account_customer')->check()) {
            $customer=AccountCustomer::where('id','=',Auth::guard('account_customer')->id())->first();
            if($request->image===null){
                $customer->image=$request->acc_image;
                $customer->name=$request->name;
                $customer->email=$request->email;
                $customer->phone=$request->phone;
                $customer->address=$request->address;
                $customer->city=$request->city;
                $customer->province=$request->province;
                $customer->wards=$request->wards;
                if ($customer->save()) {
                    $feeship=Feeship::where('fee_matp',$customer->city)->where('fee_maqh',$customer->province)->where('fee_xaid',$customer->wards)->get();
                    if($feeship){
                        $count_feeship=$feeship->count();
                        if($count_feeship>0){
                            foreach ($feeship as $Key=>$fee){
                                Session::put('fee',$fee->fee_feeship);
                                Session::save();
                                if(Session::get('fee')){
                                    $shipping[]=array('fee_matp'=>$customer->city,
                                        'fee_maqh'=>$customer->province,
                                        'fee_xaid'=>$customer->wards,
                                        'name'=>$customer->name,
                                        'phone'=>$customer->phone,
                                        'email'=>$customer->email,
                                        'address'=>$customer->address,
                                        'note'=>'');
                                    Session::put('shipping',$shipping);
                                    Session::save();
                                }
                            }
                        }else{
                            $shipping[]=array('fee_matp'=>$customer->city,
                                'fee_maqh'=>$customer->province,
                                'fee_xaid'=>$customer->wards,
                                'name'=>$customer->name,
                                'phone'=>$customer->phone,
                                'email'=>$customer->email,
                                'address'=>$customer->address,
                                'note'=>'');
                            Session::put('fee',50000);
                            if(Session::get('fee')){
                                Session::put('shipping',$shipping);
                                Session::save();
                            }
                            Session::save();
                        }
                    }
                    return redirect()->back()->with('message', 'C???p nh???t th??nh c??ng!');
                } else {
                    return redirect()->back()->with('error', 'C???p nh???t th???t b???i!');
                }
            }else{
                $data = $request->validate([
                    'image' => 'required',
                    'name'=> 'required',
                    'email'=> 'required',
                    'phone'=>'required',
                    'city'=>'',
                    'province'=>'',
                    'wards'=>'',
                    'address'=>'',
                ], [
                    'image.required' => 'H??nh ???nh kh??ng ???????c ????? tr???ng',
                ]);
                $data['image']= Helper::imageUpload($request);
                if($customer->update($data)){
                    $feeship=Feeship::where('fee_matp',$customer->city)->where('fee_maqh',$customer->province)->where('fee_xaid',$customer->wards)->get();
                    if($feeship){
                        $count_feeship=$feeship->count();
                        if($count_feeship>0){
                            foreach ($feeship as $Key=>$fee){
                                Session::put('fee',$fee->fee_feeship);
                                Session::save();
                                if(Session::get('fee')){
                                    $shipping[]=array('fee_matp'=>$customer->city,
                                        'fee_maqh'=>$customer->province,
                                        'fee_xaid'=>$customer->wards,
                                        'name'=>$customer->name,
                                        'phone'=>$customer->phone,
                                        'email'=>$customer->email,
                                        'address'=>$customer->address,
                                        'note'=>'');
                                    Session::put('shipping',$shipping);
                                    Session::save();
                                }
                            }
                        }else{
                            $shipping[]=array('fee_matp'=>$customer->city,
                                'fee_maqh'=>$customer->province,
                                'fee_xaid'=>$customer->wards,
                                'name'=>$customer->name,
                                'phone'=>$customer->phone,
                                'email'=>$customer->email,
                                'address'=>$customer->address,
                                'note'=>'');
                            Session::put('fee',50000);
                            if(Session::get('fee')){
                                Session::put('shipping',$shipping);
                                Session::save();
                            }
                            Session::save();
                        }
                    }
                    return redirect()->back()->with('message', 'C???p nh???t th??nh c??ng!');
                } else {
                    return redirect()->back()->with('error', 'C???p nh???t th???t b???i!');
                }
            }

        }else{
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
                return redirect()->route('shopping.login')->with('success','X??c minh t??i kho???n th??nh c??ng!');;
            }else{
                Auth::guard('account_customer')->attempt($login);
                return redirect()->route('shopping.login')->with('success','X??c minh t??i kho???n th??nh c??ng!');;
            }
        }else{
            return redirect()->route('shopping.login')->with('success','M?? x??c nh???n kh??ng h???p l???!');
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
            return redirect()->back()->with('forgot','Email kh??ng t???n t???i!');
        }else{
            $forgot_pass=strtoupper(Str::random(10));
            $accountcustomer->update(['forgot'=>$forgot_pass]);
            require "app/PHPMailer-master/src/PHPMailer.php";  //nh??ng th?? vi???n v??o ????? d??ng, s???a l???i ???????ng d???n cho ????ng n???u b???n l??u v??o ch??? kh??c
            require "app/PHPMailer-master/src/SMTP.php"; //nh??ng th?? vi???n v??o ????? d??ng
            require 'app/PHPMailer-master/src/Exception.php'; //nh??ng th?? vi???n v??o ????? d??ng
            $mail = new PHPMailer(true);  //true: enables exceptions
            try{
                $mail->SMTPDebug = 2;  // 0,1,2: ch??? ????? debug. khi m???i c???u h??nh ?????u t???t th?? ch???nh l???i 0 nh??
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

                $mail->addAddress($to, $to_name); //mail v?? t??n ng?????i nh???n
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = "X??c th???c email t??i kho???n th??nh vi??n tr??n TLmobile";
                $cus_id=$accountcustomer->id;
                $noidungthu = "<p style='display: contents;'>Xin ch??o, </p> <b>".$to_name."</b><br><p>H??y click v??o link b??n d?????i ????? ti???ng h??nh ?????i l???i m???t kh???u c???a b???n.</p>
                                                <a href='".route('customer.activedforgot',['customer'=>$cus_id,'forgot'=>$forgot_pass])."'>".route('customer.activedforgot',['customer'=>$cus_id,'forgot'=>$forgot_pass])."</a><br><p>Xin c???m ??n!</p>";
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
                    return redirect()->back()->with('error','Ch??ng t??i kh??ng th??? g???i email x??c minh cho b???n ???????c.');
//                echo "<h1>Loi khi goi mail: " . $mail->ErrorInfo . '</h1>';
                } else {
                    return redirect()->back()->with('success','L??m ??n click v??o ???????ng link ch??ng t??i ???? g???i qua email c???a b???n ????? ?????i l???i m???t kh???u!');
                }
            }catch (Exception $e) {
                return redirect()->back()->with('error','???? c?? l???i x???y ra! L???y l???i m???t kh???u kh??ng th??nh c??ng');
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
            return redirect()->route('shopping.login')->with('error','M?? x??c nh???n kh??ng h???p l???!');
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
            return redirect()->route('shopping.login')->with('status','H??y ????ng nh???p tr?????c khi ?????i m???t kh???u.');
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
                return redirect()->back()->with('error','M???t kh???u kh??ng ch??nh x??c. vui l??ng nh???p l???i!');
            }else{
                $accountcustomer->update(['forgot'=>null,'password'=>Hash::make($pass)]);
                if(Auth::guard('account_customer')->check()){
                    Auth::guard('account_customer')->logout();
                    return redirect()->route('shopping.login')->with('success','?????i m???t kh???u th??nh c??ng. H??y ????ng nh???p l???i!');
                }else{
                    return redirect()->route('shopping.login')->with('success','?????i m???t kh???u th??nh c??ng!');
                }
            }
        }else{
            return redirect()->back()->with('error','Nh???p l???i m???t kh???u kh??ng tr??ng kh???p!');
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
                    return redirect()->back()->with('change','Email kh??ng t???n t???i!');
                }else{
                    $accountcustomer->update(['forgot'=>null,'password'=>Hash::make($pass)]);
                    if(Auth::guard('account_customer')->check()){
                        Auth::guard('account_customer')->logout();
                        return redirect()->route('shopping.login')->with('success','?????i m???t kh???u th??nh c??ng. H??y ????ng nh???p l???i!');
                    }else{
                        return redirect()->route('shopping.login')->with('success','?????i m???t kh???u th??nh c??ng!');
                    }
                }
            }else{
                return redirect()->back()->with('error','Nh???p l???i m???t kh???u kh??ng tr??ng kh???p!');
            }
        }else{
            return redirect()->back()->with('error','M???t kh???u c?? kh??ng ch??nh x??c!');
        }
    }

}

?>
