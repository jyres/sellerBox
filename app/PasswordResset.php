<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordResset extends Model 
{

    protected $table = 'password_resset';
    public $timestamps = false;
    protected $fillable = array('email', 'last_password', 'created_at', 'new_password');

}