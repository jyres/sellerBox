<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model 
{

    protected $table = 'material';
    public $timestamps = true;
    protected $fillable = array('materialName');

    public function item()
    {
        return $this->belongsToMany('App\Item');
    }

}