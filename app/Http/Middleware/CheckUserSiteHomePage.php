<?php

namespace App\Http\Middleware;

use App\Models\Site;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserSiteHomePage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // SE NÃO HOUVER UM SITE CADASTRADO PARA O USUÁRIO, REDIRECIONA PARA A PÁGINA DE CADASTRO DE SITES...
        if(Site::where('site', session('user.site_usuario'))->count() == null) {

            return redirect('/sites')->with('alertInfo', 'Cadastre seu site na ferramenta.');

        }

        return $next($request);
    }
}
