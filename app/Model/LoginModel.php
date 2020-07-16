<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $guarded = []; 
    protected $primaryKey = "id";
    public $timestamps = false;

}

