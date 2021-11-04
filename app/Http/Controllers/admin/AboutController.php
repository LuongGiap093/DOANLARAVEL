<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Classes\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\About;
use Session;

class AboutController extends Controller
{
    public $viewprefix;

    public $viewnamespace;
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.about.';
        $this->viewnamespace='panel/gioi-thieu';
        $this->index = 'about.index';

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count=About::count();
        $about=About::first();
        return view($this->viewprefix . 'index', compact('about','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        //
        $about = new About();
        $request->validate([
            'image' => 'required',
            'about_title' => 'required',
            'about_content' => 'required',
            'about_status' => 'required',
        ]);
        $about->about_image = $request->image;
        $about->about_image = $this->imageUpload($request);
        $about->about_title = $request->about_title;
        $about->about_content = $request->about_content;
        $about->about_status = $request->about_status;
        if ($about->save()) {
            return redirect()->back()->with('status','Thêm thành công!');
        } else {
            return redirect()->back()->with('error','Thêm thất bại!');
        }

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
                $request->image->move(public_path('frontend/assets/images/about'), $imageName);
                return $imageName;
            }
        }
        return '';
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {

        if ($request->hasFile('image')) {
            $about->about_image = $this->imageUpload($request);
        }
        $about->about_title = $request->about_title;
        $about->about_content = $request->about_content;
        $about->about_status = $request->about_status;
        if ($about->save()) {
            return redirect()->back()->with('status','sửa thành công!');
        } else {
            return redirect()->back()->with('error','Sửa thất bại!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
