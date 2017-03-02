<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'user_id',
      'tanggal_pemasukan',
      'jumlah_pemasukan',
      'keterangan_pemasukan'
    ];

    public function user(){
      $this->belongsTo('App\User');
    }
}
