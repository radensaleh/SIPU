<?php

namespace App;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUKM extends Authenticatable
{
    use Notifiable;

    protected $table = 'tb_admin_ukm';

    protected $fillable = [
      'id_admin', 'nama_admin', 'email', 'password', 'id_ukm'
    ];

    protected $primaryKey = 'id_admin';

    public $incrementing = false;

    protected $hidden = [
        'password','remember_token',
    ];

    public function setPasswordAttribute($value)
    {
      $this->attributes['password'] = bcrypt($value);
    }
}
