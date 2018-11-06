<?php

namespace capac\Http\Controllers;

use capac\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contaExibir($id){

        $usuario = User::findOrFail($id);
        return view('usuario.editar', compact('usuario'));
    }

    public function atualizar($id)
    {
        //
    }
}
