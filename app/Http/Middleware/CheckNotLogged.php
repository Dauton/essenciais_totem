<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckNotLogged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // SE O USUÁRIO JÁ ESTIVER LOGADO, SERÁ REDIRECIONADO À PÁGINA HOME...
        if(session('user'))
        {
            return redirect('/home');
        }

        return $next($request);
    }
}
