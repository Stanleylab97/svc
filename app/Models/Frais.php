<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frais extends Model
{
    //

    public function reception(){
        return $this->belongsTo(Reception::class);
    }
}
