<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MsUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ms_users')->insert([
           [ 'username' => 'cent',
            'password' => bcrypt("Centbin25")],
            [
                'username' => 'admin',
                'password' => bcrypt("passwd.14") 
            ]
        ]);
    }
}
