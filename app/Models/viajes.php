<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viajes extends Model
{
    use HasFactory;

    //relacion uno a muchos (inversa)
    public function autobuses(){
        return $this->belongsTo('App\Models\autobuses');
    }
    public function urbanizaciones(){
        return $this->belongsTo('App\Models\urbanizaciones');
    }
    public function zonas(){
        return $this->belongsTo('App\Models\zonas');
    }
    public function rutas(){
        return $this->belongsTo('App\Models\rutas');
    }
      public function cantones(){
        return $this->belongsTo('App\Models\cantones');
    }
    public function departamentos(){
        return $this->belongsTo('App\Models\departamentos');
    }
    public function municipios(){
        return $this->belongsTo('App\Models\municipios');
    }
}
