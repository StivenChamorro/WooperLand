<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

     //Relacion Uno a Muchos con Store
     public function Store(){
        return $this->belongsTo('App\Models\Store');

    }

}
