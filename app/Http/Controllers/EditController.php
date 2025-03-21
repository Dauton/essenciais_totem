<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function editUser(Request $request)
    {
        InputValidationsController::validationUser($request);

        $id = $request->input('id');
        $nome_usuario = $request->input('nome_usuario');
        $usuario = $request->input('usuario');
        $site_usuario = $request->input('site_usuario');
        $perfil = $request->input('perfil');
        $senha = $request->input('senha');

        User::where('id', $id)->update(
            [
                'nome_usuario' => $nome_usuario,
                'usuario' => $usuario,
                'site_usuario' => $site_usuario,
                'perfil' => $perfil,
                'senha' => password_hash($senha, PASSWORD_ARGON2ID)
            ]
        );

        return redirect ('/users')->with('alertSuccess', 'Usuário editado com sucesso.');

    }

    public function editSite(Request $request)
    {

        InputValidationsController::validationSite($request);

        $id = $request->input('id');
        $site = $request->input('site');
        $titulo_url1 = $request->input('titulo_url1');
        $url1 = $request->input('url1');
        $titulo_url2 = $request->input('titulo_url2');
        $url2 = $request->input('url2');
        $titulo_url3 = $request->input('titulo_url3');
        $url3 = $request->input('url3');
        $titulo_url4 = $request->input('titulo_url4');
        $url4 = $request->input('url4');
        $titulo_url5 = $request->input('titulo_url5');
        $url5 = $request->input('url5');
        $titulo_url6 = $request->input('titulo_url6');
        $url6 = $request->input('url6');
        $titulo_url7 = $request->input('titulo_url7');
        $url7 = $request->input('url7');
        $titulo_url8 = $request->input('titulo_url8');
        $url8 = $request->input('url8');
        $titulo_url9 = $request->input('titulo_url9');
        $url9 = $request->input('url9');
        $titulo_url10 = $request->input('titulo_url10');
        $url10 = $request->input('url1');
        $titulo_url11 = $request->input('titulo_url11');
        $url11 = $request->input('url11');
        $titulo_url12 = $request->input('titulo_url12');
        $url12 = $request->input('url12');

        Site::where('id', $id)->update([
            'site' => $site,
            'titulo_url1' => $titulo_url1,
            'url1' => $url1,
            'titulo_url2' => $titulo_url2,
            'url2' => $url2,
            'titulo_url3' => $titulo_url3,
            'url3' => $url3,
            'titulo_url4' => $titulo_url4,
            'url4' => $url4,
            'titulo_url5' => $titulo_url5,
            'url5' => $url5,
            'titulo_url6' => $titulo_url6,
            'url6' => $url6,
            'titulo_url7' => $titulo_url7,
            'url7' => $url7,
            'titulo_url8' => $titulo_url8,
            'url8' => $url8,
            'titulo_url9' => $titulo_url9,
            'url9' => $url9,
            'titulo_url10' => $titulo_url10,
            'url10' => $url10,
            'titulo_url11' => $titulo_url11,
            'url11' => $url11,
            'titulo_url12' => $titulo_url12,
            'url12' => $url12,
        ]);

        return redirect ('/sites')->with('alertSuccess', 'Site editado com sucesso.');

    }
}
