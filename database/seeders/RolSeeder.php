<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert(
            [
                ['rol_name' => "Invitado"],
                ['rol_name' => "Administrador"],
                ['rol_name' => "Usuario Autentificado"]
            ]
        );
    }
}
