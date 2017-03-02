<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'barang_id',
      'user_id',
      'jumlah_barang_penjualan',
      'harga_penjualan',
      'tanggal_penjualan',
      'keterangan_penjualan'
    ];

    public function barang(){
      $this->belongsTo('App\Barang');
    }

    public function user(){
      $this->belongsTo('App\User');
    }
}
