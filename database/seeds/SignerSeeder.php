<?php

use App\Models\Commande;
use App\Models\Signataire;
use Illuminate\Database\Seeder;

class SignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $commande=factory(Commande::class)->create();
        $signataire=factory(Signataire::class)->create();

        $commande->signataires()->attach($signataire);
    }
}
