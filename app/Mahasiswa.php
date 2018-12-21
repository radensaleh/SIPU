<?php

namespace App;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mahasiswa extends Authenticatable
{
    use Notifiable;

    protected $table = 'tb_mahasiswa';

    protected $fillable = [
        'nim','nama_mhs','id_prodi','email','password','alamat','no_hp'
    ];

    protected $primaryKey = 'nim';

    public $incrementing = false;

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
      $this->attributes['password'] = bcrypt($value);
    }

    public function pendaftaran()
    {
        return $this->hasMany('App\Pendaftaran', 'nim');
    }

    public function prodi()
    {
        return $this->belongsTo('App\Prodi', 'id_prodi');
    }

}
