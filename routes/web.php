<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateSiteController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PasswordController;
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

        // EXIBIÇÕES...

            // EXIBIÇÃO DA PÁGNIA HOME...
            Route::get('/home', [PagesController::class, 'showHomePage'])->name('home');

            // EXIBIÇÃO DA PÁGINA DE SITES...
            Route::get('/sites', [PagesController::class, 'showSitesPage'])->name('sites');

            // EXIBIÇÃO DA PÁGINA DE CRIAÇÃO DE SITE...
            Route::get('/create-site', [PagesController::class, 'showCreateSitePage'])->name('newSite');

            // EXIBIÇÃO DA PÁGINA DE EDIÇÃO DE SITE...
            Route::get('/editSite/{id}', [PagesController::class, 'showEditSitePage'])->name('editSite');

        // EXECUÇÕES...

            // EXECUSÃO DA EDIÇÃO DO SITE...
            Route::post('/editSite{id}', [EditController::class, 'editSite'])->name('editSite');

            // EXECUÇÃO DO UPDATE DE SENHA DO USUÁRIO...
            Route::post('/updatePassword/{id}', [PasswordController::class, 'updatePassword'])->name('updatePassword');

            // VERIRICAÇÃO DO PERFIL DO USUÁRIO...
            Route::middleware([CheckPerfil::class])->group(function() {

                // EXIBIÇÕES...

                    // EXIBIÇÃO DA PÁGINA DE USUÁRIOS...
                    Route::get('/users', [PagesController::class, 'showUsersPage'])->name('users');

                    // EXIBIÇÃO DA PÁGINA DE CRIAÇÃO DE USUÁRIO...
                    Route::get('/create-user', [PagesController::class, 'showCreateUserPage'])->name('newUser');

                    // EXIBIÇÃO DE EDIÇÃO DE USUÁRIO...
                    Route::get('/editUser/{id}', [PagesController::class, 'showEditUserPage'])->name('editUser');

                    // EXIBIÇÃO RESET DE SENHA DO USUÁIRO...
                    Route::get('/update-password/{id}', [PagesController::class, 'showUpdatePasswordPage'])->name('update-password');

                // EXECUÇÕES...

                    // EXECUÇÃO DA CRIAÇÃO DE USUÁRIO...
                    Route::post('/createUser', [CreateUserController::class, 'createUser']);

                    // EXECUSÃO DA EDIÇÃO DO USUÁRIO...
                    Route::post('/editUser', [EditController::class, 'editUser'])->name('editUser');

                    // EXECUÇÃO DA EXCLUSÃO DE USUÁRIO...
                    Route::get('/deleteUser/{id}', [DeleteController::class, 'deleteUser'])->name('deleteUser');

                    // EXECUÇÃO DA EXCLUSÃO DO SITE...
                    Route::get('/deleteSite/{id}', [DeleteController::class, 'deleteSite'])->name('deleteSite');
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
