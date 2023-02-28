<?php

namespace App\Http\Controllers\Planilla\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaboralesController extends Controller
{
    public function index(){
        return view('planillas.personal.datos');
    }
}
