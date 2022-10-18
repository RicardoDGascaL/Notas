<?php

namespace App\Http\Controllers;

Use App\Nota;
use Illuminate\Http\Request;

class perfilController extends Controller
{
    public function perfil(){


        $notas = Nota::latest('updated_at')->get();

        return view('perfil.perfil', compact('notas'));
    }
}
