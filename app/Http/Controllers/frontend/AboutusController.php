<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class AboutusController extends Controller
{
    public function about_us(){
        $data = [];
        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || About Us' ;
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || About Us' ;
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || About Us' ;
        return view('frontend.pages.about.about_us', $data);
    }
    public function leadership(){
        $data = [];
        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || Leadership' ;
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || Leadership' ;
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || Leadership' ;
        return view('frontend.pages.about.leadership', $data);
    }
}
