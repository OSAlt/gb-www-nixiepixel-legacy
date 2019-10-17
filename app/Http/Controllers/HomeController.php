<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $curl = curl_init(); //initialize the curl
        $url = 'https://social.geekbeacon.org/api/v1.0/social/INSTAGRAM/activity?count=6'; //set the api url
        $media = NULL;

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
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE); //get status code
        curl_close($curl); //close the connection

        // If unable to fetch data create placeholder data.
        if($status === 200) {
            $media = json_decode($response, true);
        }

        return view('home', compact('media'));
    }

    public function stats() {
        return view('full-stats');
    }
}
