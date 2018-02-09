<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    //

    public function boissons()
    {
        return $this->belongsTo('App\Boisson');
    }

}
