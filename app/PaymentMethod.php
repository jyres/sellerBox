<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model 
{

    protected $table = 'payment_method';
    public $timestamps = true;
    protected $fillable = array('pm_name');

    public function order()
    {
        return $this->belongsToMany('App\Order');
    }

}