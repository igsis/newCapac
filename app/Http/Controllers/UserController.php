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

    public function contaExibir(User $usuario)
    {
        return view('usuario.editar', compact('usuario'));
    }

    public function contaEditar(Request $request, User $usuario)
    {
        $data = $this->validate($request, [
            'nome'  =>  'required',
            'email' =>  'required|email|unique:users,email,'.$usuario->id
        ]);

        $usuario->update([
            'name'  =>  $request->nome,
            'email' =>  $request->email
        ]);

        return redirect()->back()->with('flash_message', 'Cadastro Atualizado com Sucesso!');
    }
}
