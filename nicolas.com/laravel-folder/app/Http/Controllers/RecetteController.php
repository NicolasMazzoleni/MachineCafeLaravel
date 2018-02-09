<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Boisson;
use App\Ingredient;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function index()
    {
        $boissons = Boisson::orderBy('nom', 'ASC')->get();
        $ingredients = Ingredient::orderBy('nom', 'ASC')->get();
        $data = ['boissons' => $boissons, 'ingredients' => $ingredients];
        return view('recette', $data);
    }

    public function form()
    {
        $boisson_id = request('boisson_id');
        $ingredient_id = request('ingredient_id');
        $nbdose = request('nbdose');
        $boisson = Boisson::find($boisson_id);
        $boisson->ingredients()->attach($ingredient_id, ['nbdose' => $nbdose]);

        return redirect('/recette');
    }

    public function deleteRecette($boisson_id, $ingredient_id)
    {
        // dd($boisson_id, $ingredient_id );
        $boisson = Boisson::find($boisson_id);
        $boisson->ingredients()->detach($ingredient_id);

        return redirect('/boisson/' . $boisson_id);

    }

}
