<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Logo;

use DB;
use Illuminate\Http\Request;
use Mail;
use Session;

class ContactController extends Controller
{


    public function showForm(Request $request)
    {
        $categorys = Category::all();
        $logos = Logo::all();
        $contacts = Contact::all();
        return view('user.page.contact', compact('contacts', 'logos','categorys'));
    }

    public function storeForm(Request $request)
    {
        $data=Request::all();
        $this->validate($request, [
            'contacts_name' => 'required',
            'contacts_email' => 'required|email',
            'contacts_title' => 'required',
            'contacts_comment' => '',
        ]);
        Contact::create($request->all());
//        $to_name = "TLMobile";
//        $to_email = $data['contacts_email'];//send to this email
//        $data = array("name"=>"Mail từ tài khoản khách hàng","body"=>'Mail gửi về vấn đề hàng hóa'); //body of mail.blade.php
//        Mail::send('user.page.send_mail',$data,function($message) use ($to_name,$to_email){
//            $message->to($to_email)->subject('test mail nhé');//send this mail with subject
//            $message->from($to_email,$to_name);//send from this mail
//        });

        \Mail::send('user.page.mail', [
            'contacts_name' => $request->get('contacts_name'),
            'contacts_email' => $request->get('contacts_email'),
            'contacts_title' => $request->get('contacts_title'),
            'contacts_comment' => $request->get('contacts_comment'),
        ], function ($message) use ($request) {
            $message->from($request->contacts_email);
            $message->to('luong12cb2@gmail.com', 'Hello Admin')
                ->subject($request->get('contacts_comment'));
        });
        return back()->with('success', 'Thanks for contacting us.');

    }


}
