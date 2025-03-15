<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateSiteController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\PagesController;
use App\Http\Middleware\CheckLogged;
use App\Http\Middleware\CheckNotLogged;
use Illuminate\Support\Facades\Route;

// --- EXIBIÇÃO DE PÁGINAS --- //


    // EXIBIÇÃO DA PÁGINA ESSENCIAIS...
    Route::get('/', [PagesController::class, 'showEssenciaisPage']);

    // EXIBIÇÃO DA PÁGINA DE SITE...
    Route::get('/site', [PagesController::class, 'showSitePage']);



// --- AUTENTICAÇÃO --- //



// --- MIDDLEWARES --- //

    // O USUÁRIO NÃO ESTÁ LOGADO, BLOQUEIA O ACESSO DE:
    Route::middleware([CheckLogged::class])->group(function() {

        // EXIBIÇÕES DE PÁGINAS...

            // EXIBIÇÃO DA PÁGNIA HOME...
            Route::get('/home', [PagesController::class, 'showHomePage']);

            // EXIBIÇÃO DA PÁGINA DE USUÁRIOS...
            Route::get('/users', [PagesController::class, 'showUsersPage']);

            // EXIBIÇÃO DA PÁGINA DE CRIAÇÃO DE SITE...
            Route::get('/create-site', [PagesController::class, 'showCreateSitePage']);

            // EXIBIÇÃO DA PÁGINA DE SITES...
            Route::get('/sites', [PagesController::class, 'showSitesPage']);

            // EXIBIÇÃO DA PÁGINA DE CRIAÇÃO DE USUÁRIO...
            Route::get('/create-user', [PagesController::class, 'showCreateUserPage']);


        // EXECUÇÕES...

            // CRIAÇÃO DE USUÁRIO...
            Route::post('/createUser', [CreateUserController::class, 'createUser']);

            // CRIAÇÃO DE SITE...
            Route::post('/createSite', [CreateSiteController::class, 'createSite']);


        // AUTENTICAÇÕES...

            // LOGOUT...
            Route::get('/logout', [AuthController::class, 'logout']);

    });

    // O USUÁRIO ESTÁ LOGADO, BLOQUEIA O ACESSO DE...
    Route::middleware([CheckNotLogged::class])->group(function() {

        // EXIBIÇÕES...

            // EXIBIÇÃO DA PÁGINA DE LOGIN...
            Route::get('/login', [PagesController::class, 'showLoginPage']);


        // AUTENTICAÇÕES...

            // EXECUTA O LOGIN...
            Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);

    });
