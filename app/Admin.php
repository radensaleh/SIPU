<?php

namespace App;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'tb_admin';

    protected $fillable = [
        'id','nama','email','password'
    ];

    protected $hidden = [
      'password', 'remember_token',
    ];
}
