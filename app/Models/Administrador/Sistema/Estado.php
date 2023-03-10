<?php

namespace App\Models\Administrador\Sistema;

use App\Models\Comercial\Sede;
use App\Models\Comercial\Unidad;
use App\Models\RRHH\Personal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    public function unidades(){
        return $this->hasMany(Unidad::class);
    }

    public function sedes(){
        return $this->hasMany(Sede::class);
    }
    public function personales(){
        return $this->hasMany(Personal::class);
    }
}
