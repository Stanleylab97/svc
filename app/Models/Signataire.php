<?php

namespace App\Models;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;

class Signataire extends Model
{
    //


    public function commande(){
        return $this->belongsToMany(Commande::class);
    }
}
