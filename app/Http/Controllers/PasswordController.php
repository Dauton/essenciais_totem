<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class PasswordController extends Controller
{
    public function updatePassword(Request $request, $id)
    {

        InputValidationsController::validationUpdatePassword($request);

        $senha = $request->input('senha');

        User::where('id', $id)->update([
            'senha' => password_hash($senha, PASSWORD_ARGON2ID)
        ]);

        if(session('user.perfil') === 'ADMIN') {
            return redirect('/users')->with('alertSuccess', 'Senha alterada com sucesso.');
        } else {
            return redirect('/home')->with('alertSuccess', 'Senha alterada com sucesso.');
        }

    }
}
