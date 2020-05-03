<?php

use App\Models\Marque;
use Illuminate\Database\Seeder;

class MarqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        
        Marque::create([
            'libelle'=>'Viande'
        ]);

         Marque::create([
            'libelle'=>'Voiture'
        ]);

         Marque::create([
            'libelle'=>'Riz'
        ]);

         Marque::create([
            'libelle'=>'Vivriers'
        ]);


    }
}
