<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class ContactController extends Controller
{
    public function contact(){
        $data = [];
        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || Contact Us' ;
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || Contact Us' ;
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || Contact Us' ;
        return view('frontend.pages.contact.contact', $data);
    }
}
