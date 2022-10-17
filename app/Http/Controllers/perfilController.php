<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class perfilController extends Controller
{
    public function perfil(){


        $portafolio = DB::table('notas')->get();

        return view('perfil.perfil', compact('portafolio'));
    }
}
