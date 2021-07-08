<?php

namespace App\Http\Controllers\admin;

use App\Classes\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use Illuminate\Support\Facades\Session;

class LogoController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.logo.';
        $this->viewnamespace='panel/logo';
        $this->index='logo.index';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $logos = Logo::all();
        return view($this->viewprefix.'index' ,compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $logos = Logo::all();
        return view($this->viewprefix.'create',compact('logos'));
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
        $data=$request->validate([
            'logo_image' => 'required',
            'logo_status' => 'required',
        ]);
        $data['logo_image'] = Helper::background_imageUpload($request);
        if(Logo::create($data))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route($this->index);
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
    public function edit(Logo $logo)
    {
        //
        return view($this->viewprefix.'edit')->with('logo', $logo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logo $logo)
    {
        //
        $data=$request->validate([
            'logo_image' => 'required',
            'logo_status' => 'required',
        ]);
        $data['logo_image'] = Helper::background_imageUpload($request);
        if($logo->update($data))
            Session::flash('message', ' Update successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('logo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logo $logo)
    {
        //
        if($logo->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('logo.index');
    }
}
