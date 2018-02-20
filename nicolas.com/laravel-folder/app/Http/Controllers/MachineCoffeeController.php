<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;
use App\Ingredient;
use App\Vente;
use Illuminate\Support\Facades\Auth;

class MachineCoffeeController extends Controller
{
    public function index()
    {
        $boissons = Boisson::orderBy('nom', 'ASC')->get();


        $ingredients = Ingredient::where('nom', 'sucre')->first();

        $data = ['boissons' => $boissons, 'ingredients' => $ingredients];
        return view('welcome', $data);
    }


    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store()
    {
        $this->validate(request(), [

            'boisson_id' => 'required',
            'nbsucre' => 'required'

        ]);


        $boisson = Boisson::find(request('boisson_id'));
        $vente = new Vente;
        $vente->boisson()->associate($boisson);
        if (Auth::user()) {
            $vente->user()->associate(Auth::user());
        } else {
            $vente->user_id = 0;
        }
        $vente->nbsucre = request('nbsucre');
        $vente->boisson_prix = $vente->boisson->prix;


        $ings = $vente->boisson->ingredients;

        foreach ($ings as $ing) {

            $ing->stock = $ing->stock - $ing->pivot->nbdose;
            $ing->save();
        };

        $sucre = $vente->nbsucre;
        $ingredient = Ingredient::where('nom', 'sucre')->first();
        $ingredient->stock = $ingredient->stock - $sucre;
        $ingredient->save();

        $vente->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
