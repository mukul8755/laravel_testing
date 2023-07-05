<?php

namespace App\Http\Controllers;
use Agent;
use Illuminate\Http\Request;

class GetBrowserNameController extends Controller
{

    //composer require jenssegers/agent to import this library

    //Browser name and version
    public function index(Request $request)
    {
        $browser = Agent::browser();
        $version = Agent::version($browser);
  
        dd($browser, $version);
    }

    //Device Name
    public function device(Request $request)
    {
        $device = Agent::device();
  
        dd($device);
    }

    //Platform name
    public function Platform(Request $request)
    {
        $platform = Agent::platform();
  
        dd($platform);
    }

    //CheckDevice 
    public function CheckDevice(Request $request)
    {
        if (Agent::isMobile()) {
            $result = 'Yes, This is Mobile.';
        }else if (Agent::isDesktop()) {
            $result = 'Yes, This is Desktop.';
        }else if (Agent::isTablet()) {
            $result = 'Yes, This is Desktop.';
        }else if (Agent::isPhone()) {
            $result = 'Yes, This is Phone.';
        }
  
        dd($result);
    }

    //Check ROBOT aur not
    public function Robot(Request $request)
    {
        if (Agent::isRobot()) {
            dd('Yes, User is Robot.');
        }
  
        dd("User is real!");
    }


}
