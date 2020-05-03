<?php

namespace App\Models;

use App\Models\Marque;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    //


    public function marques(){
        return $this->hasMany(Marque::class);
    }

    
}
