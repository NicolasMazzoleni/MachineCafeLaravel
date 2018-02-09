<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
    protected $fillable = ['nom', 'stock'];

    public function boissons()
    {
        return $this->belongsToMany('App\Ingredient')->withPivot('nbdose');
    }
}
