<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Session;
use App\Classes\Helper;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.slider.';
        $this->viewnamespace='panel/slider';
        $this->index='slider.index';
    }
    public function index()
    {
        $sliders = Slider::all();
        return view($this->viewprefix.'index' ,compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders = Slider::all();
        return view($this->viewprefix.'create',compact('sliders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'slider_small_title' => 'required',
            'slider_big_title' => 'required',
            'highlight_text' => 'required',
            'slider_description' => 'required',
            'slider_title_button' => 'required',
        ]);
        $data['image'] = Helper::imageUpload($request);
        if(Slider::create($data))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route($this->index);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $Slider)
    {

    }
    public function edit(Slider $slider)
    {
        return view($this->viewprefix.'edit')->with('slider', $slider);
        // return view($this->viewprefix.'edit',compact('product'));
    }
    public function update(Request $request, Slider $slider)
    {
        $data=$request->validate([
          'slider_small_title' => 'required',
          'slider_big_title' => 'required',
          'highlight_text' => 'required',
          'slider_description' => 'required',
          'slider_title_button' => 'required',
        ]);
        $data['image'] = Helper::imageUpload($request);
        if($slider->update($data))
            Session::flash('message', ' Update successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('slider.index');
    }


    public function destroy(Slider $slider)
    {
        if($slider->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('slider.index');
    }
//
//
//
//    public function productlist($id){
//
//        $products = Slider::find($id)->product;
//        return view('admin.Slider.productlist', compact('products'));
//    }
//
//    public function changestatus($id)
//    {
//        $Slider= Slider::find($id);
//        $Slider->Slider_status=!$Slider->Slider_status;
//        if($Slider->save()){
//            return redirect()->back();
//        }
//        else
//        {
//            return redirect(route('changestatus'));
//        }
//    }



}
