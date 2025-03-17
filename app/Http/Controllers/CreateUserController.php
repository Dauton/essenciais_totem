<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDOException;

class CreateUserController extends Controller
{
    public function createUser(Request $request)
    {

        InputValidationsController::validationUser($request);

        $nome_usuario = $request->input('nome_usuario');
        $usuario = $request->input('usuario');
        $site_usuario = $request->input('site_usuario');
        $perfil = $request->input('perfil');
        $senha = $request->input('senha');

        try {
            DB::connection()->getPdo();
            echo "Conexão bem sucessida!";
        } catch(PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }
    }
}
