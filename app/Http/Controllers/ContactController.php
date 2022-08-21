<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactPost(Request $request){
        
        $request->validate([
                        'name' => 'required',
                        'email' => 'required',
                        'phone' => 'required',
                        'msg' => 'required'
                ]);

        Mail::send('email', array(
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'msg' => $request->msg
        ), function ($message) use ($request) {
                        $message->from($request->email);
                        $message->to('adeoyesolomon2693@gmail.com', 'Shalom brand')
                        ->subject('Your Website Contact Form');
        });

        return back()->with('status', 'Thanks for contacting Lawlan Logistics, We will get back to you soon!');
    }
}
