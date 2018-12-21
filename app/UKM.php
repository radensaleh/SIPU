<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UKM extends Model
{
  protected $table = 'tb_ukm';

  protected $fillable = [
    'id_ukm', 'nama_ukm'
  ];

  protected $primaryKey = 'id_ukm';

  public $incrementing = false;
  
}
