<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model 
{

    protected $table = 'admin';
    public $timestamps = true;
    protected $fillable = array('admin_name', 'admin_password', 'admin_email', 'admin_contact', 'admin_address', 'seller_address');

    public function shop()
    {
        return $this->hasMany('App\Shop');
    }

}