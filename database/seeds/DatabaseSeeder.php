<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MarqueSeeder::class);
        $this->call(FournisseurSeeder::class);
        $this->call(OrigineSeeder::class);
        $this->call(ProduitSeeder::class);
        $this->call(SignerSeeder::class);
    }
}
