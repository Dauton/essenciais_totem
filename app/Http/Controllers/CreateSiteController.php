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

        DB::table('sites')->insert([
            'site' => trim(mb_strtoupper($site)),
            'titulo_url1' => trim(mb_strtoupper($titulo_url1)),
            'url1' => trim($url1),
            'titulo_url2' => trim(mb_strtoupper($titulo_url2)),
            'url2' => trim($url2),
            'titulo_url3' => trim(mb_strtoupper($titulo_url3)),
            'url3' => trim($url3),
            'titulo_url4' => trim(mb_strtoupper($titulo_url4)),
            'url4' => trim($url4),
            'titulo_url5' => trim(mb_strtoupper($titulo_url5)),
            'url5' => trim($url5),
            'titulo_url6' => trim(mb_strtoupper($titulo_url6)),
            'url6' => trim($url6),
            'titulo_url7' => trim(mb_strtoupper($titulo_url7)),
            'url7' => trim($url7),
            'titulo_url8' => trim(mb_strtoupper($titulo_url8)),
            'url8' => trim($url8),
            'titulo_url9' => trim(mb_strtoupper($titulo_url9)),
            'url9' => trim($url9),
            'titulo_url10' => trim(mb_strtoupper($titulo_url10)),
            'url10' => trim($url10),
            'titulo_url11' => trim(mb_strtoupper($titulo_url11)),
            'url11' => trim($url11),
            'titulo_url12' => trim(mb_strtoupper($titulo_url12)),
            'url12' => trim($url12),
        ]);

        return redirect('/sites')->with('alertSuccess', 'Site cadastrado com sucesso!');

    }
}
