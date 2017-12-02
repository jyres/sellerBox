<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model 
{

    protected $table = 'order';
    public $timestamps = true;
    protected $fillable = array('delivery_address');

    public function item()
    {
        return $this->hasMany('App\Item');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function payment_method()
    {
        return $this->hasOne('App\PaymentMethod');
    }

}