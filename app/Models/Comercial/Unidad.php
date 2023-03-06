<?php

namespace App\Models\Comercial;

use App\Models\Administrador\Sistema\Empresa;
use App\Models\Administrador\Sistema\Estado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    protected $table = 'unidades';

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    public function sedes(){
        return $this->hasMany(Sede::class);
    }
}
