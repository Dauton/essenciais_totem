<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showEssenciaisPage()
    {
        return view('essenciais');
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
        return view('sites');
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
