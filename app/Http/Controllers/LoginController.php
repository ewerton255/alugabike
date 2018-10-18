<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function logar(Request $request){
        if($request->email == 'admin@admin.com' && $request->senha == '123'){
            session(['usuario' => 'Ewerton']);
            return redirect()->route('index');
        }else{
            return redirect()->route('login')->with('Erro', 'Login ou senha inválidos!');
        }
    }
}
