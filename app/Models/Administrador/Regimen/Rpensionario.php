<?php

namespace App\Models\Administrador\Regimen;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rpensionario extends Model
{
    use HasFactory;
    protected $table = 'rpensionarios';

    public function pensionario(){
        return $this->belongsTo(Pensionario::class);
    }
    public function afp(){
        return $this->belongsTo(Afp::class);
    }
    public function comision(){
        return $this->belongsTo(Comision::class);
    }
    public function movimiento(){
        return $this->belongsTo(Movimiento::class);
    }
}