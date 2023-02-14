<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;
    protected $table = 'contactus';

    public function addContactUs($requestData){
        $objContactus = new Contactus();
        $objContactus->name = $requestData['name'];
        $objContactus->company_name = $requestData['company'];
        $objContactus->email = $requestData['email'];
        $objContactus->mobileno = $requestData['mo_no'];
        $objContactus->description = $requestData['description'];
        $objContactus->status = 'A';
        $objContactus->is_deleted = 'N';
        $objContactus->created_at = date('Y-m-d H:i:s');
        $objContactus->updated_at = date('Y-m-d H:i:s');
        return $objContactus->save();
    }
}
