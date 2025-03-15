<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDOException;

class CreateSiteController extends Controller
{
    public function createSite(Request $request)
    {

        InputValidationsController::validationSite($request);

        $site = $request->input('site');
        $titulo_url01 = $request->input('titulo_url01');
        $url01 = $request->input('url01');
        $titulo_url01 = $request->input('titulo_url02');
        $url01 = $request->input('url02');
        $titulo_url01 = $request->input('titulo_url03');
        $url01 = $request->input('url03');
        $titulo_url01 = $request->input('titulo_url04');
        $url01 = $request->input('url04');
        $titulo_url01 = $request->input('titulo_url05');
        $url01 = $request->input('url05');
        $titulo_url01 = $request->input('titulo_url06');
        $url01 = $request->input('url06');
        $titulo_url01 = $request->input('titulo_url07');
        $url01 = $request->input('url07');
        $titulo_url01 = $request->input('titulo_url08');
        $url01 = $request->input('url08');
        $titulo_url01 = $request->input('titulo_url09');
        $url01 = $request->input('url09');
        $titulo_url01 = $request->input('titulo_url10');
        $url01 = $request->input('url10');
        $titulo_url01 = $request->input('titulo_url11');
        $url01 = $request->input('url11');
        $titulo_url01 = $request->input('titulo_url12');
        $url01 = $request->input('url12');

        try {
            DB::connection()->getPdo();
            echo "Conexão bem sucedida!";
        } catch(PDOException $e) {
            echo "Falha na conexão: " . $e->getMessage();
        }


    }
}
