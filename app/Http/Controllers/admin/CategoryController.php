<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $viewprefix;
    public $viewnamespace;
    public function __construct()
    {   $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.category.';
        $this->viewnamespace='panel/category';
    }
    public function index()
    {
        //
        $categorys = Category::all();
        return view($this->viewprefix.'index',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->viewprefix.'create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      
        $category = new Category;
        $request->validate([
            'name' => 'required',
            'content' => 'required',
           
        ]);
        $category->name =  $request->name;
        $category->content = $request->content;
       if($category->save())
        //if(Category::create($request->all()))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('category.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
       
        $category->name =  $request->name;
        $category->content = $request->content;
       if($category->save())
        //if(Category::create($request->all()))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('category.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        if($category->delete())
        Session::flash('message', 'successfully!');
    else
        Session::flash('message', 'Failure!');
    return redirect()->route('category.index'); 
    }
    
    public function productlist($id)
    {
        $products = Category::Find($id)->product;
        return view('admin.category.productlist',compact('products'));
    }
}
