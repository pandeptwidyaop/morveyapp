<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resi extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'pesanan_id',
      'nomor_resi'
    ];

    public function pesanan(){
      $this->belongsTo('App\Pesanan');
    }
}
