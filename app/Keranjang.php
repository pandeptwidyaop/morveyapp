<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'barang_id',
      'user_id',
      'jumlah_barang_keranjang',
      'status_keranjang'
    ];

    public function barang(){
      $this->belongsTo('App\Barang');
    }

    public function user(){
      $this->belongsTo('App\User');
    }
}
