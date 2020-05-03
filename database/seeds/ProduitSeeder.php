<?php

use App\Models\Marque;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('produits')->truncate();

        $marque2=Marque::where('libelle','Viande')->first();
      

        $prod1=$marque2->produits()->create([
            'libelle'=>"Ailerons"
        ]);

    }
}
