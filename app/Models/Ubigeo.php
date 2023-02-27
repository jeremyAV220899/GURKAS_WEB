<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    use HasFactory;
    public function departamento(){
        return $this->belongsTo(Departamento::class);
    }
    public function provincia(){
        return $this->belongsTo(Provincia::class);
    }
    public function distrito(){
        return $this->belongsTo(Distrito::class);
    }
}
