<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function usuarios_index(){
        return view('usuarios.usuarios');
    }
}
