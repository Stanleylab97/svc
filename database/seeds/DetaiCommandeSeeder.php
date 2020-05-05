<?php

use App\Models\Marque;
use App\Models\Origine;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\Signataire;
use App\Models\Fournisseur;
use Illuminate\Database\Seeder;

class DetaiCommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fournisseur=Fournisseur::find(1);
        $origine1=Origine::find(9);
        $origine2=Origine::find(100);
        $marque=Marque::find(1);
        $produit1=Produit::find(1);
        $produit2=Produit::find(2);
       // $commande=Commande::find(1);

       // $produit1->marque()->create($marque);
       // $produit2->marque()->create($marque);

        



        // $signataire1=Signataire::find(1);
        // $signataire2=Signataire::find(2);


    }
}
