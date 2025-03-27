<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPerfil
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(session('user.perfil') != 'ADMIN') {

            return redirect()->back()->with('alertError', 'Você não tem permissão para acessar essa página ou realizar essa ação.');

        }

        return $next($request);
    }
}
