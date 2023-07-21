<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            'email' => 'natasha@gmail.com',
            'username' => 'natasha',
            'password' => bcrypt('nat123'),
            'firstname' => 'Natasha',
            'lastname' => 'Radika',
        ]);
    }
}
