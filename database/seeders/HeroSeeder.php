<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('heroes')->insert([
        'main'=>"WEB BACKEND DASTURCHI",
        'subtitle'=>"Salom men Vaisov Azamat",
        'description'=>"Salom men Vaisov Azamat",
        'project'=>150,
        'experince'=>5,
        'clients'=>10,
        'image'=>"hero.jpg"
        ]);
    }
}
