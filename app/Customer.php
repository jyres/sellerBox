<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model 
{

    protected $table = 'customer';
    public $timestamps = true;
    protected $fillable = array('customer_name', 'customer_pseudo', 'customer_password', 'customer_address', 'customer_email', 'customer_contact', 'customer_contact2');

    public function order()
    {
        return $this->hasMany('App\Order');
    }

}