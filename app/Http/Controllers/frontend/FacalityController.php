<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class FacalityController extends Controller
{
    public function all_location(){
        $data = [];
        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || Our Location' ;
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || Our Location' ;
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || Our Location' ;
        return view('frontend.pages.facality.all_location', $data);
    }
}
