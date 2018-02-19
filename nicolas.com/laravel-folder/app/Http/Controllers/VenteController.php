<?php

namespace App\Http\Controllers;

use App\User;
use App\Vente;
use Illuminate\Support\Facades\Auth;

class VenteController extends Controller
{
    public function index()
   {

       if(auth::user()->type === 'superadmin') {
           $ventes = Vente::orderBy('id', 'ASC')->get();
       }
       else{
       $ventes = Vente::where('user_id', Auth::id())->get();
   }



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
