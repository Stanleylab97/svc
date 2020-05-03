<?php

namespace App\Models;

use App\Models\Marque;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    

    //
    
    public function fournisseurs(){
        return $this->hasMany(Marque::class);
    }

    public function produits(){

       return $this->hasMany(Produit::class)->latest();
    }
}
