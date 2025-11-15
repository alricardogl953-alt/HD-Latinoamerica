<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('toys')->insert([
           [
                'name' => 'Carrito Hot Wheels',
                'description' => 'Carrito metálico de colección Hot Wheels.',
                'price' => 120.00,
                'gender_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pista de carros Hot Wheels',
                'description' => 'Pista con rampas y loopings para carritos.',
                'price' => 450.00,
                'gender_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lego City',
                'description' => 'Set Lego City para construcción creativa.',
                'price' => 899.00,
                'gender_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Muñeca Barbie',
                'description' => 'Muñeca Barbie clásica articulada.',
                'price' => 350.00,
                'gender_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Set de té infantil',
                'description' => 'Juego de té plástico con colores pastel.',
                'price' => 200.00,
                'gender_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Casa de muñecas',
                'description' => 'Casa de muñecas de tres pisos con accesorios.',
                'price' => 1200.00,
                'gender_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
