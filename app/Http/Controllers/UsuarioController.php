<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function registrar(){
        return view('registrar');
    }

    public function login(){
        return view('login');
    }
}
