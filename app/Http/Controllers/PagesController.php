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

}
