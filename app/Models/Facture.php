<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    //

    public function reception(){
        $this->belongsTo(Reception::class);
    }
}
