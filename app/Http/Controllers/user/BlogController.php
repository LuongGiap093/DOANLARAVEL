<?php

namespace App\Http\Controllers\user;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Blog;
use DB;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Collection;

class BlogController extends Controller {


  public function index() {
    $blogs=Blog::all();
    $firsts=$blogs->first();
//    $collection = new Collection($blogs);
//    $firstValue = $collection->shift();
//    dump($firstValue);

    $collections = collect($blogs);
    $chunk = $collections->splice(0, 1);
    $collections->all();

      return view('user.page.blog',compact('collections','firsts'));
  }
  public function blogdetail($id){
    $blog_detail=Blog::find($id);
    return view('user.page.blog_details',compact('blog_detail'));
  }












}
