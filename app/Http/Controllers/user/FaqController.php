<?php

namespace App\Http\Controllers\user;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Faq;
use DB;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Collection;

class FaqController extends Controller {


  public function index() {
      $faqs=Faq::all();
      return view('user.page.faq',compact('faqs'));
  }






}
