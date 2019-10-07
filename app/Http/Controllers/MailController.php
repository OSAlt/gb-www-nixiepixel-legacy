<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    public function sendEmail(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string|min:25'
        ]);

        if($validator->fails()) {
            return redirect('/#contact')->withErrors($validator)->withInput();
        } else {
            $data = array('name' => $request->get('name'), 'email' => $request->get('email'), 'subject' => $request->get('subject'), 'message' => $request->get('message'));

            Mail::send('layouts.contact', ['data' => $data], function ($message) use ($data) {
                $message->to('niki@nixiepixel.com', 'NixiePixel')->subject
                ($data['subject'] . ' - NixiePixel.com');
                $message->from($data['email'], $data['name']);
            });

            Session::flash('email-sent', 'Your email has been sent successfully!');
            return view('home', compact('data'));
        }

    }
}
