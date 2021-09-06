<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamentos extends Model
{
    use HasFactory;
    protected $fillable= [
        'nombre_departamento'
      ];

    //relacion uno a muchos 
    public function viajes(){
        return $this->hasMany('App\Models\viajes');
    }
}
