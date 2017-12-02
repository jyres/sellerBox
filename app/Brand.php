<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model 
{

    protected $table = 'brand';
    public $timestamps = true;
    protected $fillable = array('brand_name');

    public function item()
    {
        return $this->belongsToMany('App\Item');
    }

}