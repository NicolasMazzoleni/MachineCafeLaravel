<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Ingredient;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    public function index()
    {
    	$ingredients = Ingredient::orderBy('nom','ASC')->get();

    	return view('ingredients', compact('ingredients'));
	}


	public function form()
    {

        $this->validate(request(), [

            'nom' => 'required',
            'quantitee' => 'required'
        ]);

        $nom = request('nom');
        $quantitee = request('quantitee');
        Ingredient::create(['nom' => $nom, 'stock' => $quantitee]);

        return redirect('/ingredients');
    }

    public function details($id)
    {
        $details = Ingredient::find($id);
        return view('detailsIngredients', compact('details'));
    }


    public function update($id)
    {
        $modification = Ingredient::find($id);
        $modification->nom = request('nom');
        $modification->stock = request('quantitee');
        $modification->save();

        return redirect('/ingredients');

    }

    public function delete($id)
    {
        $delete = Ingredient::find($id);
        $delete->delete();

        return redirect('/ingredients');
    }

}