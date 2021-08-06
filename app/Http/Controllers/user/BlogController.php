<?php

namespace App\Http\Controllers\user;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order_Detail;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Logo;
use DB;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Collection;

class BlogController extends Controller
{


    public function index()
    {
        $categorys = Category::all();
        $logos = Logo::all();
        $blogs = Blog::all();
        $firsts = $blogs->first();

        $collections = collect($blogs);
        $chunk = $collections->splice(0, 1);
        $collections->all();

        return view('user.page.blog', compact('collections', 'firsts', 'logos','categorys'));
    }

    public function blogdetail($id)
    {
        $logos=Logo::all();
        $categorys = Category::all();
        $blog_detail = Blog::find($id);
        return view('user.page.blog_details', compact('blog_detail','logos','categorys'));
    }

    public function show_blog()
    {

    }
}
