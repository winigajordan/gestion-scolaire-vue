<?php

namespace Database\Seeders;

use App\Models\Niveau;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Niveau::create(['libelle' => 'Licence 1']);
        Niveau::create(['libelle' => 'Licence 2']);
        Niveau::create(['libelle' => 'Licence 3']);
        Niveau::create(['libelle' => 'Master 1']);
        Niveau::create(['libelle' => 'Master 2']);

    }
}
