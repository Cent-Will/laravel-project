<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {       

        DB::table('categories')->insert(['Category'=>'Makan']);
        DB::table('categories')->insert(['Category'=>'Gojek']);
        DB::table('categories')->insert(['Category'=>'Selfcare']);
        DB::table('categories')->insert(['Category'=>'Kuota']);
        DB::table('categories')->insert(['Category'=>'Bensin']);
        DB::table('categories')->insert(['Category'=>'Lain-lain']);
    }
}
