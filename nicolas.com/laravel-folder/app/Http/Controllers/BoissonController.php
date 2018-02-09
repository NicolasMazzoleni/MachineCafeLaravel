<?php

namespace App\Http\Controllers;

use App\Ingredient;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Boisson;
use Illuminate\Http\Request;


class BoissonController extends Controller
{


    public function index()
    {
        //$boissons = DB::select('SELECT id, nom, prix FROM
        //boissons ORDER BY nom ASC');
        $boissons = Boisson::orderBy('nom', 'ASC')->get();
        $data = ['boissons' => $boissons];

        return view('boisson', $data);
    }


    public function form()
    {
        $nom = request('nom');
        $prix = request('prix');
        Boisson::create(['nom' => $nom, 'prix' => $prix]);

        return redirect('/boisson');
    }


    public function unordered()
    {
        $boissons = Boisson::orderBy('nom', 'DESC')->get();


        return view('boisson', ['boissons' => $boissons]);
    }


    public function prixCroissant()
    {

        $boissons = Boisson::orderBy('prix', 'ASC')->get();

        return view('boisson', ['boissons' => $boissons]);
    }


    public function prixDecroissant()
    {

        $boissons = Boisson::orderBy('prix', 'DESC')->get();

        return view('boisson', ['boissons' => $boissons]);
    }


    public function details($id)
    {
        $details = Boisson::find($id);
        $ingredients = $details->ingredients;
        $data = ['details' => $details, 'ingredients' => $ingredients];
        return view('details', $data);
    }


    public function update($id)
    {
        $modification = Boisson::find($id);
        $modification->nom = request('nom');
        $modification->prix = request('prix');
        $modification->save();

        return redirect('/boisson');

    }


    public function delete($id)
    {
        $delete = Boisson::find($id);
        $delete->delete();

        return redirect('/boisson');
    }

}

?>