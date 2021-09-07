<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autobuses extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_unidad',
        'numero_placa'
    ];

    //relacion uno a muchos
    public function viajes(){
        return $this->hasMany('App\Models\viajes');
    }
}
