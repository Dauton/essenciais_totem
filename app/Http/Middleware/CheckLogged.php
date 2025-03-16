<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLogged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // SE O USUÁRIO NÃO ESTIVER LOGADO, SERÁ REDIRECIONADO PARA REALIZAR O LOGIN...
        if(!session('user'))
        {
            return redirect('/login')->with('loginError', 'Efetue o login para acessar a ferramenta.');
        }

        return $next($request);
    }
}
