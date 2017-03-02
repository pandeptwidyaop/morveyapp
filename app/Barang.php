<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'user_id',
      'kode_barang',
      'nama_barang',
      'harga_pokok_barang',
      'harga_reseller_barang',
      'harga_jual_barang',
      'stok_barang',
      'image_barang',
      'keterangan_barang'
    ];

    public function user(){
      $this->belongsTo('App\User');
    }

}
