<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'nome_usuario' => 'Dauton Pereira Félix',
                'usuario' => 'dpfelix',
                'site_usuario' => 'CDARCEX',
                'senha' => bcrypt('dpfelix'),
                'perfil' => 'ADMIN',
                'created_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
