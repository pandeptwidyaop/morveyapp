<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'user_id',
      'tanggal_pengeluaran',
      'jumlah_pengeluaran',
      'keterangan_pengeluaran'
    ];

    public function user(){
      $this->belongsTo('App\User');
    }
}
