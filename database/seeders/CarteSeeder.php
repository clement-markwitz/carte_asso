<?php

namespace Database\Seeders;

use App\Models\Carte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carte::factory()->count(10)->create();
    }
}
