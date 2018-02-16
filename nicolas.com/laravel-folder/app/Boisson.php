<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    // 
    protected $fillable = ['nom', 'prix'];

    public function ventes()
    {
        return $this->hasMany('App\Vente');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient')->withPivot('nbdose');
    }

    public function isAvailable()
    {

        $ingredients = $this->ingredients;

        foreach ($ingredients as $ingredient) {
            if ($ingredient->pivot->nbdose > $ingredient->stock) {
                return false;
            }
        }
        return true;
    }


}
