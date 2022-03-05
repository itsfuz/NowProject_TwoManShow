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
        //
        $users = [

            [
                'username' => 'itssfuz',
                'email' => 'hansen@gmail.com',
                'password' => bcrypt('tms1'),
                'role' => 'Admin'
            ],
            [
                'username' => 'thelonedoodle',
                'email' => 'alsya@gmail.com',
                'password' => bcrypt('tms1'),
                'role' => 'Admin'
            ]
        ];

        DB::table('users')->insert($users);
    }
}
