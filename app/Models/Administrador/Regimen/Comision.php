<?php

namespace App\Models\Administrador\Regimen;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{
    use HasFactory;
    protected $table = 'comisiones';
    public function relaciones(){
        return $this->hasMany(Rpensionario::class);
    }
}
