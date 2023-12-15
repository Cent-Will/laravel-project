<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transactions')->insert([
            'Category_id' => "1",
            'nominal' => "25000",
            'TransactionType_id' => "1",
            'description' => 'Warteg',
            'date'=> Carbon::create(2022,12,14)
        ]);
    }
}
