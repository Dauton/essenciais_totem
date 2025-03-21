<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateSiteController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\PagesController;
use App\Http\Middleware\CheckLogged;
use App\Http\Middleware\CheckNotLogged;
use App\Http\Middleware\CheckPerfil;
use Illuminate\Support\Facades\Route;

// --- EXIBIÇÃO DE PÁGINAS --- //


    // EXIBIÇÃO DA PÁGINA ESSENCIAIS...
    Route::get('/', [PagesController::class, 'showEssenciaisPage']);

    // EXIBIÇÃO DA PÁGINA DE SITE...
    Route::get('/site/{site}', [PagesController::class, 'showSitePage']);


// --- MIDDLEWARES --- //

    // O USUÁRIO NÃO ESTÁ LOGADO, BLOQUEIA O ACESSO DE:
    Route::middleware([CheckLogged::class])->group(function() {

        // EXIBIÇÕES DE PÁGINAS...

            // EXIBIÇÃO DA PÁGNIA HOME...
            Route::get('/home', [PagesController::class, 'showHomePage'])->name('home');

            // EXIBIÇÃO DA PÁGINA DE SITES...
            Route::get('/sites', [PagesController::class, 'showSitesPage'])->name('sites');

            // EXIBIÇÃO DA PÁGINA DE CRIAÇÃO DE SITE...
            Route::get('/create-site', [PagesController::class, 'showCreateSitePage'])->name('newSite');

            // EXIBIÇÃO DA PÁGINA DE EDIÇÃO DE SITE...
            Route::get('/editSite/{id}', [PagesController::class, 'showEditSitePage'])->name('editSite');

            // EXECUÇÃO DA EXCLUSÃO DO SITE...
            Route::get('/deleteSite/{id}', [PagesController::class, 'deleteSitePage'])->name('deleteSite');

            // EXECUSÃO DA EDIÇÃO DO SITE...
            Route::post('/editSite', [EditController::class, 'editSite'])->name('editSite');

            // VERIRICAÇÃO DO PERFIL DO USUÁRIO...
            Route::middleware([CheckPerfil::class])->group(function() {

                // EXIBIÇÕES...

                    // EXIBIÇÃO DA PÁGINA DE USUÁRIOS...
                    Route::get('/users', [PagesController::class, 'showUsersPage'])->name('users');

                    // EXIBIÇÃO DA PÁGINA DE CRIAÇÃO DE USUÁRIO...
                    Route::get('/create-user', [PagesController::class, 'showCreateUserPage'])->name('newUser');

                    // EXIBIÇÃO DE EDIÇÃO DE USUÁRIO...
                    Route::get('/editUser/{id}', [PagesController::class, 'showEditUserPage'])->name('editUser');

                    // EXECUÇÃO DA PÁGINA DE EXCLUSÃO DE USUÁRIO...
                    Route::get('/deleteUser/{id}', [PagesController::class, 'DeleteUserPage'])->name('deleteUser');

                    // EXECUSÃO DA EDIÇÃO DO USUÁRIO...
                    Route::post('/editUser', [EditController::class, 'editUser'])->name('editUser');

                // EXECUÇÕES...

                    // CRIAÇÃO DE USUÁRIO...
                    Route::post('/createUser', [CreateUserController::class, 'createUser']);
            });


            // CRIAÇÃO DE SITE...
            Route::post('/createSite', [CreateSiteController::class, 'createSite']);


        // AUTENTICAÇÕES...

            // LOGOUT...
            Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    });

    // O USUÁRIO ESTÁ LOGADO, BLOQUEIA O ACESSO DE...
    Route::middleware([CheckNotLogged::class])->group(function() {

        // EXIBIÇÕES...

            // EXIBIÇÃO DA PÁGINA DE LOGIN...
            Route::get('/login', [PagesController::class, 'showLoginPage'])->name('login');


        // AUTENTICAÇÕES...

            // EXECUTA O LOGIN...
            Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);

    });
