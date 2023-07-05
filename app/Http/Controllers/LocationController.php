<?php

namespace App\Http\Controllers;
use Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
     public function index(Request $request)
    {
        //  $ip = $request->ip();/* Dynamic IP address */
         //print_r($ip);die;
        $ip = '162.159.24.227'; /* Static IP address */
        $currentUserInfo = Location::get($ip);
          
        return view('Location.GetLocation', compact('currentUserInfo'));
    }
}
