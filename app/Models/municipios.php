<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    use HasFactory;
    
    //relacion uno a muchos 
    public function viajes(){
        return $this->hasMany('App\Models\viajes');
    }
}
