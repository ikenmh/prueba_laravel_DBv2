<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EndpoitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('endpoint')->insert(
            [
                [
                    'rol_id' => "1" , 
                    "endpoint_name"=>"Registro de usuarios",
                    "route" => "/api/usuario/registrar"  
                ],

                [
                    'rol_id' => "2" , 
                    "endpoint_name"=>"Gestionar roles",
                    "route" => "/api/rol/getionar"  
                ],

                [
                    'rol_id' => "2" , 
                    "endpoint_name"=>"Gestionar roles de los usuarios",
                    "route" => "/api/usuario/roles/getionar"  
                ],

                [
                    'rol_id' => "2" , 
                    "endpoint_name"=>"Gestionar endpoints",
                    "route" => "/api/endpoints/getionar"  
                ],

                [
                    'rol_id' => "2" , 
                    "endpoint_name"=>"Gestionar endpoints sobre roles",
                    "route" => "/api/rol/endpoints/getionar"  
                ],

                [
                    'rol_id' => "2" , 
                    "endpoint_name"=>"Consultar usuarios que no tengan endpoints",
                    "route" => "/api/user/no/endpoints/getionar"  
                ],
                
            ]
        );
    }
}
