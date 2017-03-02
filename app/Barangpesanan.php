<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangpesanan extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'barang_id',
      'pesanan_id',
      'jumlah_barang_barangpesanan'
    ];

    public function user(){
      $this->belongsTo('App\User');
    }

    public function pesanan(){
      $this->belongsTo('App\Pesanan');
    }
}
