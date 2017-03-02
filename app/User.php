<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function barang(){
      $this->hasMany('App\Barang');
    }

    public function barangpesanan(){
      $this->hasMany('App\Barangpesanan');
    }

    public function keranjang(){
      $this->hasMany('App\Keranjang');
    }

    public function pemasukan(){
      $this->hasMany('App\Pemasukan');
    }

    public function pengeluaran(){
      $this->hasMany('App\Pengeluaran');
    }

    public function tagihan(){
      $this->hasMany('App\Tagiahan');
    }
}
