<?php

namespace App\Http\Controllers;

use App\Vente;

class VenteController extends Controller
{
    public function index()
   {
       $ventes = Vente::orderBy('id', 'ASC')->get();

       $data = ['ventes' => $ventes];

       return view('vente', $data);
    }

    public function delete($id)
    {
        $delete = Vente::find($id);
        $delete->delete();
        return redirect('/vente');
    }

}
