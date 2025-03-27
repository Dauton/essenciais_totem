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
                'nome_usuario' => trim(mb_strtoupper($nome_usuario)),
                'usuario' => trim(mb_strtoupper($usuario)),
                'site_usuario' => trim(mb_strtoupper($site_usuario)),
                'perfil' => trim(mb_strtoupper($perfil)),
                'senha' => password_hash($senha, PASSWORD_ARGON2ID)
            ]
        );

        return redirect('/users')->with('alertSuccess', 'Usuário criado com sucesso.');

    }
}
