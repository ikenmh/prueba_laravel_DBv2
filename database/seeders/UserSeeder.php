<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert(
            [
                ['account' => "user1", 'password' => "user-pasword1"],
                ['account' => "user2", 'password' => "user-pasword2"],
                ['account' => "user3", 'password' => "user-pasword3"],
            ]
        );
    }
}
