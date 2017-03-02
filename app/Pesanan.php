<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
  protected $primaryKey = 'id';

  protected $fillable = [

  ];

  public function barangpesanan(){
    $this->hasMany('App\Barangpesanan');
  }

  public function keranjang(){
    $this->hasMany('App\Keranjang');
  }

  public function resi(){
    $this->hasOne('App\Resi');
  }

  public function tagihan(){
    $this->hasMany('App\Tagihan');
  }

}
