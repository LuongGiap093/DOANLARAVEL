<?php

namespace App\Http\Controllers\user;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\AccountCustomer;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Collection;

class LoginCustomerController extends Controller {

  public function index() {
      return view('user.page.loginCustomer');
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
