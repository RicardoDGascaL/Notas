<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('login.login');

    }

    public function register(){
        return view('register.register');
    }

    public function store(Request $request){

        var_dump( $request->input('username') );

        
       /* validar campos de login y registro 
       request()->validate([
            'username' => 'required',
            'Email' => 'required|email',
            'password' => 'required|min:4'
        ]);*/


    }
}
