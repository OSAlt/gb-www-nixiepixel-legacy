<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    public function sendEmail(Request $request) {

        // Create function to collect proper email to send email to from api
        function getEmail($subject) {
            $curl = curl_init(); //initialize the curl
            $url = 'https://social.geekbeacon.org/api/v1.0/contact/list'; //set the api url

            // Create the curl request
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_TIMEOUT => 30000,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    // Set Here Your Requested Headers
                    'Content-Type: application/json',
                ),
            ));
            $response = curl_exec($curl); //assign the returned data to a variable
            $err = curl_error($curl); //capture error
            curl_close($curl); //close the connection

            if ($err) {
                abort(400);
            } else {
                $data = json_decode($response);

                foreach($data as $item) {
                    if($item->description == $subject) {
                        return $item->email;
                    }
                }
            }
        }

        // Create validation rules
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
                $message->to(getEmail($data['subject']), 'NixiePixel')->subject
                ($data['subject'] . ' - NixiePixel.com');
                $message->from($data['email'], $data['name']);
            });

            //Send notification that email has been sent
            Session::flash('email-sent', 'Your email has been sent successfully!');
            return redirect('/');
        }
    }
}
