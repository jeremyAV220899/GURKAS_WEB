<?php

namespace App\Models\Comercial;

use App\Models\Administrador\Sistema\Estado;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    public function unidad(){
        return $this->belongsTo(Unidad::class);
    }

}
