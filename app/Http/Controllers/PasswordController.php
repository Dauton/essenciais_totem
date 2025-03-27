<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasswordController extends Controller
{
    public function updatePassword(Request $request, $id)
    {

        InputValidationsController::validationUser($request);

        User::where('id', $id)->update([
            'user' => [
                'senha' => $request->input('senha'),
            ]
        ]);

        return redirect('/users')->with('alertSuccess', 'Senha laterada com sucesso.');
    }
}
