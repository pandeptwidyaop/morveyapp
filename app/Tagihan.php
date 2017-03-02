<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'user_id',
      'pesanan_id'
    ];

    public function user(){
      $this->belongsTo('App\User');
    }

    public function pesanan(){
      $this->belongsTo('App\Pesanan');
    }
}
