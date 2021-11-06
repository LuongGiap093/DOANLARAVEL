<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;

use App\Models\Product;
use App\Models\Gallery;
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
        $products = Product::where('status','<>','0')->get();

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
            'status_product' => 'required',


        ]);
        $product->name = $request->name;
        $product->image = $this->imageUpload($request);
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->content = $request->product_content;
        $product->describe = $request->describe;
        $product->status = $request->status;
        $product->status_product = $request->status_product;
        $product->idcat = $request->idcat;
        $product->brand_id = $request->brand_id;
        if ($product->save()) {
            Session::flash('message', 'Thêm sản phẩm thành công!');
        } else {
            Session::flash('message', 'Thêm thất bại!');
        }

        $pro_id=$product->id;

        $get_image=$request->file('files');
        if($get_image){
            foreach ($get_image as $key=> $image)
            {
                $get_name_image=$image->getClientOriginalName();
                $name_image=current(explode('.',$get_name_image));
                $new_image=$name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
                $image->move(public_path('frontend/assets/images/gallery'),$new_image);
                $gallery=new Gallery();
                $gallery->gallery_name=$new_image;
                $gallery->gallery_image=$new_image;
                $gallery->product_id=$pro_id;
                    $gallery->save();
            }
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
        $product->status_product = $request->status_product;
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
//        $product_id=$product->id;
////        $gallery=Gallery::where('product_id',$product_id)->get();
//        Gallery::where('product_id',$product_id)->delete();
//        $product->delete();
//        if($gallery->delete()){
//            $product->delete();
//            ession::flash('message', 'successfully!');
//        }else {
//            Session::flash('message', 'Failure!');
//        }
//        return redirect()->route('product.index');
    }

    public function viewUploads()
    {
        $images1 = Product:: all();
        return view('view_uploads')->with('images', $images1);
    }

  public function changestatusproduct($id) {
    $product = Product::find($id);
    $product->status_product = !$product->status_product;
    if ($product->save()) {
      return redirect()->back();
    }
    else {
      return redirect(route('changestatusproduct'));
    }
  }

}
