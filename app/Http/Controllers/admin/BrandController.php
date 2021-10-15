<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{

    public $viewprefix;

    public $viewnamespace;

    public function __construct() {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix = 'admin.brand.';
        $this->viewnamespace = 'panel/brand';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands = Brand::all();
        return view($this->viewprefix . 'index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all();
        //
        return view($this->viewprefix . 'create',compact( 'categorys',));
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
        $brand = new Brand();
        $request->validate([
            'brand_name' => 'required',
            'brand_desc' => 'required',
            'brand_status' => 'required',
            'category_id' => 'required',
        ]);
        $brand->brand_name = $request->brand_name;
        $brand->brand_desc = $request->brand_desc;
        $brand->brand_status = $request->brand_status;
        $brand->category_id = $request->category_id;
        if ($brand->save()) //if(Category::create($request->all()))
        {
            Session::flash('message', 'successfully!');
        }
        else {
            Session::flash('message', 'Failure!');
        }
        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $products = Product::where('brand_id',$id)->where('status','<>','0')->get();
        return view('admin.brand.productlist',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $categorys = Category::all();
        //
        return view('admin.brand.edit', compact('brand','categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
        $brand->brand_name = $request->brand_name;
        $brand->brand_desc = $request->brand_desc;
        $brand->brand_status = $request->brand_status;
        $brand->category_id = $request->category_id;
        if ($brand->save()) //if(Category::create($request->all()))
        {
            Session::flash('message', 'successfully!');
        }
        else {
            Session::flash('message', 'Failure!');
        }
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
        if ($brand->delete()) {
            Session::flash('message', 'successfully!');
        }
        else {
            Session::flash('message', 'Failure!');
        }
        return redirect()->route('brand.index');
    }
}
