<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $viewprefix;

    public $viewnamespace;

    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix = 'admin.product.';
        $this->viewnamespace = 'panel/product';
    }

    public function index()
    {
        $categorys = Category::all();
        $products = Product::all();

        return view($this->viewprefix.'index', compact('products', 'categorys'));

    }

    public function create()
    {
        $brands=Brand::all();
        $categorys = Category::all();
        return view($this->viewprefix.'create', compact('categorys','brands'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $product = new Product;
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'product_content' => 'required',
            'describe' => 'required',
            'status' => 'required',
            'idcat' => 'required',
            'brand_id' => 'required',
        ]);
        $product->name = $request->name;
        $product->image = $this->imageUpload($request);
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->content = $request->product_content;
        $product->describe = $request->describe;
        $product->status = $request->status;
        $product->idcat = $request->idcat;
        $product->brand_id = $request->brand_id;

        if ($product->save()) {
            Session::flash('message', 'Thêm sản phẩm thành công!');
        } else {
            Session::flash('message', 'Thêm thất bại!');
        }
        return redirect()->route('product.index');
    }

    public function imageUpload(Request $request)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $this->validate($request,
                    [
                        //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
                        'image' => 'mimes:jpg,jpeg,png,gif|max:2048',
                    ],
                    [
                        //Tùy chỉnh hiển thị thông báo không thõa điều kiện
                        'image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                        'image.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                    ]
                );
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                return $imageName;
            }
        }
        return '';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $brands=Brand::all();
        $categorys = Category::all();

        return view('admin.product.edit', compact('product', 'categorys','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        if ($request->hasFile('image')) {
            $product->image = $this->imageUpload($request);
        }
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->content = $request->product_content;
        $product->describe = $request->describe;
        $product->status = $request->status;
        $product->idcat = $request->idcat;
        // if(Product::create($request->all()))
        if ($product->save()) {
            Session::flash('message', 'Sửa thành công!');
        } else {
            Session::flash('message', 'Sửa thất bại!');
        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->delete()) {
            Session::flash('message', 'successfully!');
        } else {
            Session::flash('message', 'Failure!');
        }
        return redirect()->route('product.index');
    }

    public function viewUploads()
    {
        $images1 = Product:: all();
        return view('view_uploads')->with('images', $images1);
    }

}
