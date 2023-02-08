<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
class ServicesController extends Controller
{
    public function container_trailer_yard(){
        $data = [];
        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || Container & Trailer Yard' ;
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || Container & Trailer Yard' ;
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || Container & Trailer Yard' ;
        return view('frontend.pages.services.container_trailer_yard', $data);
    }
    public function transload_cross_dock(){
        $data = [];
        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || Transload & Cross Dock' ;
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || Transload & Cross Dock' ;
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || Transload & Cross Dock' ;
        return view('frontend.pages.services.transload_cross_dock', $data);
    }
    public function dedicated(){
        $data = [];
        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || Dedicated' ;
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || Dedicated' ;
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || Dedicated' ;
        return view('frontend.pages.services.dedicated', $data);
    }
    public function shuttle_services(){
        $data = [];
        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || Shuttle Services' ;
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || Shuttle Services' ;
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || Shuttle Services' ;
        return view('frontend.pages.services.shuttle_services', $data);
    }

    public function ftl(){
        $data = [];
        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || FTL' ;
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || FTL' ;
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || FTL' ;
        return view('frontend.pages.services.ftl', $data);
    }
}
