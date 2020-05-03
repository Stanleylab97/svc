<?php

namespace App\Models;

use App\Models\Produit;
use App\Models\Reception;
use App\Models\Signataire;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    //

    public function reception(){
        return $this->hasOne(Reception::class);
    }

    public function signataires(){
        return $this->belongsToMany(Signataire::class)->withTimestamps();
    }

    public function produits(){
        return $this->belongsToMany(Produit::class);
    }
}
