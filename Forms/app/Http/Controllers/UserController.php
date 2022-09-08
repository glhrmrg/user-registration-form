<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function formulario()
    {
        return view (view: 'cadastro');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name; 
        $user->email = $request->email;
        $user->cpf = $request->cpf;
        $user->funcao = $request->funcao;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('user.cadastro');

    }

    public function lista()
    {
        $users = User::all();

        return view('lista', [
            'users'=>$users
        ]);
    }

    public function detalhes()
    {
        $users = User::all();
        
        return view('detalhes', [
            'users'=>$users
        ]);
    }

    public function destroy($id)
    {
       $user = User::find($id);
       $user -> delete();
       
       return redirect()->route('user.detalhes');
    }
}
