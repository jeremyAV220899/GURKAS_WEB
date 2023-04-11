<?php

namespace App\Models\RRHH;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    use HasFactory;
    protected $table = 'familiares';

    public function personal() {
        return $this->belongsTo(Personal::class);
    }
}
