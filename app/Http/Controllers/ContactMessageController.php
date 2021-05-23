<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required',
        'email' => 'required|email',
        'message' => 'required',
      ]);
  
      Mail::send('email.contact-message', [
        'msg' => $request->message
      ], function ($mail) use ($request) {
        $mail->from($request->email, $request->title);
  
        $mail->to($request->email)->subject('Contact Message');
      });
  
      return redirect()->back()->with('flash_message', 'Thank you for your message.');
    }
}
