<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function sobre(){
        return view('sobre');
    }

    public function contato(){
        return view('contato');
    }

    public function galeria(){
        return view('galeria');
    }

    public function registrar(){
        return view('registrar');
    }

    public function entrar(){
        return view('entrar');
    }
}
