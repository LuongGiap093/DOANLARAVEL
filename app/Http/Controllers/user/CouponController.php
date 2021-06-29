<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use DB;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //
        $coupons = Coupon::all();
        return view('user.page.coupon', compact('coupons'));
    }

    public function AddCoupon(Request $request)
    {
        $data = $request->all();
        $coupon = Coupon::where('coupon_code', $data['coupon'])->first();
        if ($coupon == true) {
            $count_coupon = $coupon->count();
            if ($count_coupon > 0) {
                $coupon_session = Session::get('coupon');
                if ($coupon_session == true) {
                    print_r($count_coupon);
                    $is_avaiable = 0;
                    if ($is_avaiable == 0) {
                        $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_qty' => $coupon->coupon_qty,
                            'coupon_money' => $coupon->coupon_money,
                        );
                        Session::put('coupon', $cou);
                    } else {
                        $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_qty' => $coupon->coupon_qty,
                            'coupon_money' => $coupon->coupon_money,
                        );
                        Session::put('coupon', $cou);
                    }
                }else{
                    print_r($count_coupon);
                    $is_avaiable = 0;
                    if ($is_avaiable == 0) {
                        $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_qty' => $coupon->coupon_qty,
                            'coupon_money' => $coupon->coupon_money,
                        );
                        Session::put('coupon', $cou);
                    } else {
                        $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_qty' => $coupon->coupon_qty,
                            'coupon_money' => $coupon->coupon_money,
                        );
                        Session::put('coupon', $cou);
                    }
                }
                Session::save();
                return redirect()->back()->with('message', 'Thêm mã giảm giá thành công');
            }
        } else {
            return redirect()->back()->with('message', 'Mã giảm giá không đúng');
        }
    }

    function DeleteCoupon(){
        $coupon=Session::get('coupon');
        if($coupon==true){
            Session::forget('coupon');
            return redirect()->back()->with('message','Xóa mã khuyến mãi thành công!');
        }
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
