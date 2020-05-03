<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandeProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_produit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commande_id');   
            $table->unsignedBigInteger('produit_id');   
            $table->foreignId('fourniseur_id')->constrained('fournisseurs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('origine_id')->constrained('origines')->onDelete('cascade')->onUpdate('cascade');  
            $table->integer('qte');
            $table->integer('prix');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande_produit');
    }
}
