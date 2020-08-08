<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function icones(){
        return $this->belongsTo(Icone::class);
    }
}
