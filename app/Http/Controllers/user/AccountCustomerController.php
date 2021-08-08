<?php
namespace App\Http\Controllers\user;
use App\Models\Category;
use App\Models\Logo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Auth;

class AccountCustomerController extends Controller
{
  public function __construct()
  {

  }
  public function getLogin()
  {
      $logos=Logo::all();
      $categorys=Category::all();

    if (Auth::guard('account_customer')->check()) {
      return view('user.page.loginCustomer',compact('logos','categorys'));

    } else {
      return view('user.page.loginCustomer',compact('logos','categorys'));
    }
  }
  public function postLogin(request $request)
  {
      $logos=Logo::all();
      $categorys=Category::all();
    $login = [
      'email' => $request->email,
      'password' => $request->password,
    ];

    if (Auth::guard('account_customer')->attempt($login)) {

      return view('user.page.loginCustomer',compact('logos','categorys'))->with('status', 'Đang nhập thành công');
    }
    else {
      return redirect()
        ->back()
        ->with('status', 'Email hoặc Password không chính xác');
    }
  }

  public function getLogout()
  {
    Auth::guard('account_customer')->logout();
      return redirect()
          ->back();
  }
}
?>
