<?php

namespace App\Models\Administrador\Regimen;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afp extends Model
{
    use HasFactory;
    protected $table = 'afps';
    public function relaciones(){
        return $this->hasMany(Rpensionario::class);
    }
}
