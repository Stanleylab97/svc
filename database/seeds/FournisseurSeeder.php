<?php

use App\Models\Fournisseur;
use Illuminate\Database\Seeder;

class FournisseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fournisseur::truncate();

        Fournisseur::create([
            'nom'=>'DUBOIS Volailles',
            'tel'=>'+338658554'
        ]);

        Fournisseur::create([
            'nom'=>'Blabla Car',
            'tel'=>'+3398521654'
        ]);

          Fournisseur::create([
            'nom'=>'Mix Clothings',
            'tel'=>'+3398521654'
        ]);
    }
}
