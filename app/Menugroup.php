<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menugroup extends Model
{
  protected $primaryKey = 'id' ;

  protected $fillable = [
    'menu_id',
    'level',
    'urut'
  ];

  public function menu(){
    $this->belongsTo('App\Menu');
  }
}
