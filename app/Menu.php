<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
      'nama_menu',
      'link_menu',
      'icon_menu',
      'id_menu'
    ];

    public function menugroup(){
      $this->hasMany('App\Menugroup');
    }
}
