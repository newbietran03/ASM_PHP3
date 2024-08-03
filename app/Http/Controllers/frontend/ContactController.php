<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function index(){

        return view('frontend.pages.contact');

    }
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('quantmpd08630@gmail.com')->send(new \App\Mail\ContactMail($details));

        return back()->with('success', 'Cảm ơn bạn đã liên hệ với chúng tôi!');
    }
}
