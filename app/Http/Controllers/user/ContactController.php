<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use DB;
use Illuminate\Http\Request;
use Mail;
use Session;

class ContactController extends Controller {


  public function showForm(Request $request) {
    $contacts=Contact::all();
    return view('user.page.contact',compact('contacts'));
  }

  public function storeForm(Request $request) {
    $this->validate($request, [
      'contacts_name' => 'required',
      'contacts_email' => 'required|email',
      'contacts_title' => 'required',
      'contacts_comment' => 'required',
    ]);

    Contact::create($request->all());
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
