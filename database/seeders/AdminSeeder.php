<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'groupName'=>'Admin',
            'password'=>'YoshMangats33!',
            'status'=> 1,
            'fullname' => 'AdminHackathon',
            'email'=>'admin@bncc.net',
            'WA' => 'AdminHackathon',
            'lineId' => 'AdminHackathon',
            'github' => 'AdminHackathon',
            'birthPlace' => 'AdminHackathon',
            'birthDate' => '2001-01-01',
            'CV' => 'admin.jpg',
            'IdCard' => 'admin.jpg',
            'activation_token' => 'Adm1n'
        ]);
    }
}
