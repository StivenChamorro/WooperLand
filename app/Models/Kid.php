<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    use HasFactory;

    public function fathers(){
      return $this->belongsTo('App\Models\Father');//metodo de laravel  
    }

    public function topics(){
      return $this->belongsToMany('App\Models\Topic'); 
  }
}
