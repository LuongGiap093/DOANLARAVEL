<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Classes\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\About;
use Session;
use DB;

class AboutController extends Controller
{
    public $viewprefix;

    public $viewnamespace;
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.about.';
        $this->viewnamespace='panel/about';
        $this->index = 'about.index';

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count=About::where('about_status','<>',2)->count();
        $about=About::first();
        return view($this->viewprefix . 'index', compact('about','count'));
    }
    public function dieukhoan()
    {
        $count=About::where('about_status','=',2)->count();
        $dieu_khoan=About::where('about_status','=',2)->first();
        return view('admin.dieu_khoan.index', compact('dieu_khoan','count'));
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
            return redirect()->back()->with('status','Th??m th??nh c??ng!');
        } else {
            return redirect()->back()->with('error','Th??m th???t b???i!');
        }

    }
    public function imageUpload(Request $request)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $this->validate($request,
                    [
                        //Ki???m tra ????ng file ??u??i .jpg,.jpeg,.png.gif v?? dung l?????ng kh??ng qu?? 2M
                        'image' => 'mimes:jpg,jpeg,png,gif|max:2048',
                    ],
                    [
                        //T??y ch???nh hi???n th??? th??ng b??o kh??ng th??a ??i???u ki???n
                        'image.mimes' => 'Ch??? ch???p nh???n h??nh th??? v???i ??u??i .jpg .jpeg .png .gif',
                        'image.max' => 'H??nh th??? gi???i h???n dung l?????ng kh??ng qu?? 2M',
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
        if($request->image===null){
            $about->about_image = $request->about_image;
            $about->about_title = $request->about_title;
            $about->about_content = $request->about_content;
            $about->about_status = $request->about_status;
            if($about->save()){
                return redirect()->back()->with('status', 'C???p nh???t th??nh c??ng!');
            }else {
                return redirect()->back()->with('error', 'C???p nh???t th???t b???i!');
            }
        }else{
            $data=$request->validate([
            'image' => 'required',
            'about_title' => 'required',
            'about_content' => 'required',
            'about_status' => 'required',
        ]);
        $data['about_image'] = Helper::imageUpload($request);
        if ($about->update($data)) {
            return redirect()->back()->with('status','s???a th??nh c??ng!');
        } else {
            return redirect()->back()->with('error','S???a th???t b???i!');
        }
        }


//        if ($about->update(['about_image'=>$request->image,
//            'about_title'=>$request->about_title,
//            'about_content'=>$request->about_content,
//            'about_status'=>$request->about_status])) {
//            return redirect()->back()->with('status', 'C???p nh???t th??nh c??ng!');
//        } else {
//            return redirect()->back()->with('error', 'C???p nh???t th???t b???i!');
//        }
//        $data=$request->validate([
//            'image' => 'required',
//            'about_title' => 'required',
//            'about_content' => 'required',
//            'about_status' => 'required',
//        ]);
////        $data['about_image'] = Helper::imageUpload($request);
//        if ($about->update($data)) {
//            return redirect()->back()->with('status','s???a th??nh c??ng!');
//        } else {
//            return redirect()->back()->with('error','S???a th???t b???i!');
//        }
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
