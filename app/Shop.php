<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model 
{

    protected $table = 'shop';
    public $timestamps = true;
    protected $fillable = array('shop_name', 'shop_tax_payer_number');

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function item()
    {
        return $this->hasMany('App\Item');
    }

}