<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{

    protected $table = 'category';
    public $timestamps = true;
    protected $fillable = array('category_name', 'category_country');

    public function item()
    {
        return $this->hasMany('App\Item');
    }

}