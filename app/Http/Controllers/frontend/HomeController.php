<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class HomeController extends Controller
{
    public function home(){
        $data = [];
        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || Home' ;
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || Home' ;
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || Home' ;
        return view('frontend.pages.home', $data);
    }
}
