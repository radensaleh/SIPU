<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'tb_pendaftaran';

    protected $fillable = [
        'id_pendaftaran','id_ukm','nim','alasan'
    ];

    protected $primaryKey = 'id_pendaftaran';

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa', 'nim');
    }
}
