<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\Models\Contactus;
class ContactController extends Controller
{
    public function contact(){
        $data = [];
        $data['title'] = Config::get('constants.SYSTEM_NAME') . ' || Contact Us' ;
        $data['description'] = Config::get('constants.SYSTEM_NAME') . ' || Contact Us' ;
        $data['keywords'] = Config::get('constants.SYSTEM_NAME') . ' || Contact Us' ;
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['plugincss'] = array(
        );
        $data['pluginjs'] = array(
            'toastr/toastr.min.js',
            'plugins/validate/jquery.validate.min.js',
        );
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'contactus.js',
        );
        $data['funinit'] = array(
            'Contactus.init()'
        );
        return view('frontend.pages.contact.contact', $data);
    }

    public function contact_submit(Request $request){
        $objContactus = new Contactus();
        $res = $objContactus->addContactUs($request->all());
        if ($res) {
            $return['status'] = 'success';
            $return['jscode'] = '$("#loader").hide();';
            $return['message'] = 'Your details submitted successfully sent to administrator.';
            $return['redirect'] = route('contact');
        } else {
                $return['status'] = 'error';
                 $return['jscode'] = '$(".submitbtn:visible").removeAttr("disabled");$("#loader").hide();';
                $return['message'] = 'Something goes to wrong';
        }
        echo json_encode($return);
        exit;
    }
}
