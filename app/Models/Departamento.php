<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    public function provincia(){
        return $this->belongsTo(Provincia::class);
    }
    
    public function distrito(){
        return $this->belongsTo(Distrito::class);
    }
}
