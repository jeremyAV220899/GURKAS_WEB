<?php

namespace App\Models\Administrador\Regimen;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pensionario extends Model
{
    use HasFactory;
    public function relaciones(){
        return $this->hasMany(Rpensionario::class);
    }
}
