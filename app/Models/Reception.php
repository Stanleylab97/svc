<?php

namespace App\Models;

use App\Models\Facture;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    //

    public function frais(){
        return $this->hasMany(Frais::class);
    }

    public function facture(){
       return $this->hasOne(Facture::class);
    }

    public function commande(){
        return $this->belongsTo(Commande::class);
    }
}
