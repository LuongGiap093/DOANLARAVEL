<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Logo;

use Auth;
use DB;
use Illuminate\Http\Request;

class CompareController extends Controller
{
    //
    public function index(){
        $categorys=Category::where('category_status',1)->orderby('category_position','asc')->get();
        $products = DB::table('product')->where('status','<>',0)->get();

        return view('frontend.page.compare_page.so_sanh',compact('products','categorys'));
    }
}
