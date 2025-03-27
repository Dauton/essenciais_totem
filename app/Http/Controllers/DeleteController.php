<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class DeleteController extends Controller
{

    // EXCLUI O USUÁRIO SELECIONADO...
    public function deleteUser($id)
    {
        $id = Crypt::decrypt($id);
        User::where('id', $id)->delete();
        return redirect('/users')->with('alertSuccess', 'Usuário excluído com sucesso.');
    }

    public function deleteSite($id)
    {
        $id = Crypt::decrypt($id);
        Site::where('id', $id)->delete();
        return redirect('/sites')->with('alertSuccess', 'Site excluído com sucesso.');
    }
}
