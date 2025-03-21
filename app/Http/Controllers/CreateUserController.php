<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDOException;

class CreateUserController extends Controller
{
    public function createUser(Request $request)
    {

        InputValidationsController::validationCreateUser($request);

        $nome_usuario = $request->input('nome_usuario');
        $usuario = $request->input('usuario');
        $site_usuario = $request->input('site_usuario');
        $perfil = $request->input('perfil');
        $senha = $request->input('senha');

        DB::table('users')->insert(
            [
                'nome_usuario' => $nome_usuario,
                'usuario' => $usuario,
                'site_usuario' => $site_usuario,
                'perfil' => $perfil,
                'senha' => password_hash($senha, PASSWORD_ARGON2ID)
            ]
        );

        return redirect('/users')->with('alertSuccess', 'Usuário criado com sucesso.');

    }
}
