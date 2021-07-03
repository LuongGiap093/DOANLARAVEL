<?php

namespace App\Http\Controllers\user;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\AccountCustomer;
use App\Models\Category;
use App\Models\Logo;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Collection;

class LoginCustomerController extends Controller {

  public function index() {
      $logos=Logo::all();
      $categorys = Category::all();
      return view('user.page.loginCustomer',compact('logos','categorys'));
  }
  public function postadd(request $request) {

    $user = new AccountCustomer();
    //    $user->image = Helper::imageUpload($request);
    //    //      $user->background_image = Helper::background_imageUpload($request);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->phone = $request->phone;
    //      $user->phone = $request->phone;
    //      $user->address = $request->address;
    //      $user->contact = $request->contact;
    //      $user->description = $request->description;

    if ($user->save()) {
      Session::flash('message', 'successfully!');
    }
    else {
      Session::flash('message', 'Failure!');
    }
    return redirect()
      ->back();

  }

}
