<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showEssenciaisPage()
    {
        // Exibe todos os sites cadastrados em ordem alfabética por site...
        $sites = Site::orderBy('site', 'asc')->get();

        return view('essenciais',compact('sites'));
    }

    public function showSitePage()
    {
        return view('/site');
    }

    public function showLoginPage()
    {
        return view('login');
    }

    public function showHomePage()
    {
        $site = Site::where('site', session('user.site_usuario'))->first();

        return view('home', compact('site'));
    }

    public function showSitesPage()
    {
        // Exibe todos os sites cadastrados...
        $sites = Site::all();

        return view('sites', compact('sites'));
    }

    public function showUsersPage()
    {
        return view('users');
    }

    public function showCreateSitePage()
    {
        return view('create-site');
    }

    public function showCreateUserPage()
    {
        return view('create-user');
    }
}
