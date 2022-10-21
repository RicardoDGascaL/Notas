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

    public function show(Nota $nota){


        return view('perfil.show', [
            'nota' => $nota
        ]);

    }

    public function create(){

        return view('perfil.create');
    }

    public function store(){


        Nota::create([
            'title' => request('title'),
            'descripcion' => request('descripcion'),
        ]);

        return redirect()->route('perfil.index');
    }

    public function edit(Nota $nota){

        return view('perfil.edit', [
            'nota' => $nota
        ]);
    }

    public function update(Nota $nota){

        $nota -> update([
            
            'title' => request('title'),
            'descripcion' => request('descripcion'),
        ]);

        return redirect()->route('perfil.index');

    }
    public function destroy(Nota $nota){
        $nota->delete();

        return redirect()->route('perfil.index');
    }
}
