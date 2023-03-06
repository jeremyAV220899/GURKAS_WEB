<?php

namespace App\Models\Administrador\Sistema;

use App\Models\Comercial\Unidad;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    public function unidades(){
        return $this->hasMany(Unidad::class);
    }
}
