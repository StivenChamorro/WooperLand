<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achiviement extends Model
{
    use HasFactory;
    public function topic(){
        return $this->hasMany('App\Models\topic');

    }
}
