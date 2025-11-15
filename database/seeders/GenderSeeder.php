<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genders')->insert([
            [
                'name' => 'Niño',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Niña',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
