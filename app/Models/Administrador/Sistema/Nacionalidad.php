<?php

namespace App\Models\Administrador\Sistema;

use App\Models\RRHH\Personal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    use HasFactory;
    protected $table = 'nacionalidades';
    public function nacionalidades(){
        return $this->hasMany(Personal::class);
    }
}
