<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Logo;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\user\Session;

class CommentController extends Controller
{
    //
    public function add_comment(Request $request,$id){
        $product_id=$id;
        $time=Carbon::now();
        $comment=new Comment();
        $request->validate([
            'reviews' => 'required',
        ]);
        $comment->product_id=$product_id;
        $comment->comment_content=$request->reviews;
        $comment->create_date=$time;
        $comment->comment_status=1;
        $comment->save();
        return redirect()->back();
    }
}
