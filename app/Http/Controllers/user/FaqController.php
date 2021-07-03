<?php

namespace App\Http\Controllers\user;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Logo;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Faq;
use DB;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Collection;

class FaqController extends Controller {


  public function index() {
      $categorys = Category::all();
      $logos = Logo::all();
      $faqs=Faq::all();
      return view('user.page.faq',compact('faqs','categorys','logos'));
  }

}
