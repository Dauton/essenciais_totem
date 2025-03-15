<?php

namespace App\Http\Controllers;

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
        return view('home');
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
