<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorManager extends Model 
{

    protected $table = 'vendorManager';
    public $timestamps = true;
    protected $fillable = array('vm_name', 'vm_password', 'vm_contact', 'vm_email', 'vm_given_name');

}