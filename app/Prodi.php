<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'tb_prodi';

    protected $fillable = [
        'id_prodi','id_jurusan','nama_prodi'
    ];

    protected $primaryKey = 'id_prodi';

    public $incrementing = false;

    public function mahasiswa()
    {
        return $this->hasMany('App\Mahasiswa', 'id_prodi');
    }

    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan', 'id_jurusan');
    }
}
