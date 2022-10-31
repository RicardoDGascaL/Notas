<?php

namespace App\Http\Controllers;

Use App\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class perfilController extends Controller
{
        /**carga la vista del perfil de cada usuario */
    public function perfil(){

        $notas = DB::table('notas')
        ->join('users', function($join){
            $join->on('users.id', '=', 'notas.user_id')
                ->where('users.id', '=', Auth::user()->id);
        })->select('notas.*')
        ->orderByDesc('notas.id')
        ->get();

        return view('perfil.perfil', [
            'notas' => $notas
        ]);

    }
        /**muestra la nota en una vista independiente al perfil */
    public function show(Nota $nota){


        return view('perfil.show', [
            'nota' => $nota
        ]);

    }
        /**muestra la vista de creacion de notas */
    public function create(){

        return view('perfil.create');
    }

        /**creacion de nota */
    public function store(){


        Nota::create([
            'title' => request('title'),
            'descripcion' => request('descripcion'),
            'user_id' => $user_id = Auth::user()->id,
        ]);



        return redirect()->route('perfil.index');
    }
    /**carga la vista que permite editar una nota ya creada */
    public function edit(Nota $nota){

        return view('perfil.edit', [
            'nota' => $nota
        ]);
    }
        /**actualiza la nota que deseas modificar */
    public function update(Nota $nota){

        $nota -> update([
            
            'title' => request('title'),
            'descripcion' => request('descripcion'),
        ]);

        return redirect()->route('perfil.index');

    }
        /**elimina la nota que deseas */
    public function destroy(Nota $nota){
        $nota->delete();

        return redirect()->route('perfil.index');
    }
}
