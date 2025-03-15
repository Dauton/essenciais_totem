<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\InputValidationsController;
use App\Models\User;

class AuthController extends Controller
{
    public function loginSubmit(Request $request)
    {

        InputValidationsController::validationsLogin($request);

        $usuario = $request->input('usuario');
        $senha = $request->input('senha');

        $user = User::where('usuario', $usuario)->where('deleted_at', NULL)->first();

        $error = redirect()->back()->withInput()->with('loginError', "Credenciais (usuário ou senha) inválidas");

        if(!$user) {
            return $error;
        }

        if(!password_verify($senha, $user->senha)) {
            return $error;
        }

        $user->last_login = date('d-m-Y H:i:s');
        $user->save();

        session([
            'user' => [
                'id' => $user->id,
                'nome_usuario' => $user->nome_usuario,
                'usuario' => $user->usuario,
                'site_usuario' => $user->site_usuario
            ]
        ]);

        return redirect('/home');
    }

    public function logout()
    {
        session()->invalidate();
        session()->regenerateToken();

        return redirect('/login');
    }

}
