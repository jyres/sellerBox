<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model 
{

    protected $table = 'item';
    public $timestamps = true;
    protected $fillable = array('item_name', 'item_description', 'item_price', 'item_selling_price', 'item_image', 'item_status', 'stock', 'mass', 'color', 'condition', 'expiration_date');
    protected $visible = array('item_name', 'item_description', 'item_price');

    public function material()
    {
        return $this->hasOne('App\Material');
    }

    public function category()
    {
        return $this->belongsToMany('App\Category');
    }

    public function brand()
    {
        return $this->hasOne('App\Brand');
    }

    public function order()
    {
        return $this->belongsToMany('App\Order');
    }

    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }

}