<?php

namespace App\Models;

use App\Models\Marque;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{

 //Fillable


   public function marque(){
       return $this->belongsTo(Marque::class);
   }

   public function commandes(){
        return $this->belongsToMany(Commande::class);
   }

   
}
