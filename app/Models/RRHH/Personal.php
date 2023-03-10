<?php

namespace App\Models\RRHH;

use App\Models\Administrador\Sistema\Estado;
use App\Models\Administrador\Sistema\Nacionalidad;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $table = 'personales';
    public function estado(){
        return $this->belongsTo(Estado::class);
    }
    public function nacionalidad(){
        return $this->belongsTo(Nacionalidad::class);
    }
    
}
