<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class PagesController extends Controller
{
    public function showEssenciaisPage()
    {
        // Exibe todos os sites cadastrados em ordem alfabética por site...
        $sites = Site::orderBy('site', 'asc')->get();

        return view('essenciais',compact('sites'));
    }

    public function showSitePage($site)
    {

        try {
            $site = Crypt::decrypt($site);
        } catch (DecryptException $e) {
            return redirect('/')->with('alertError', 'Erro ao tentar acessar site.');
        }

        $visualizer = Site::all()->where('site', $site)->first();
        return view('site', compact('visualizer'));
    }

    public function showLoginPage()
    {
        return view('login');
    }

    public function showHomePage()
    {
        // Exibe na tela inicial o site do usuário logado...
        $site = Site::where('site', session('user.site_usuario'))->first();

        return view('home', compact('site'));
    }



// --- USUÁRIOS ---
    public function showUsersPage()
    {
        // Exibe todos os usuários cadastrados...
        $users = User::all();

        return view('users', compact('users'));
    }

    public function showCreateUserPage()
    {
        return view('create-user');
    }

    public function showEditUserPage($id)
    {
        // SE TENTAR ACESSAR UM ID ENCRIPTADO INVÁLIDO, SERÁ REDIRECIONADO À PÁGINA DE USUÁRIOS...
        try {
            $id = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            return redirect('/users')->with('alertError', 'Erro ao tentar editar usuário.');
        }

        $visualizer = User::where('id', $id)->first();
        return view('edit-user', compact('visualizer'));

    }

    public function showUpdatePasswordPage($id)
    {
        // SE TENTAR ACESSAR UM ID ENCRIPTADO INVÁLIDO, SERÁ REDIRECIONADO À PÁGINA DE USUÁRIOS...
        try {
            $id = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            return redirect('/users')->with('alertError', 'Erro ao tentar editar usuário.');
        }

        $visualizer = User::where('id', $id)->first();
        return view('/update-password', compact('visualizer'));

    }



// --- SITES ---
    public function showCreateSitePage()
    {
        return view('create-site');
    }

    public function showSitesPage()
    {
        // Exibe todos os sites cadastrados...
        $sites = Site::all();

        return view('sites', compact('sites'));
    }

    public function showEditSitePage($id)
    {
        try {
            $id = Crypt::decrypt($id);
        } catch (DecryptException $th) {
            return redirect('/sites')->with('alertError', 'Erro ao tentar editar site.');
        }

        $visualizer = Site::where('id', $id)->first();
        return view('edit-site', compact('visualizer'));

    }
}
