<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sites')->insert([
            [
                'site' => 'CDARCEX',
                'titulo_url1' => 'CHECKLIST',
                'url1' => 'https://checklist.id-logistics.com.br'
            ]
        ]);
    }
}
