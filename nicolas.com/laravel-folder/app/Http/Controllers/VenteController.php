<?php

namespace App\Http\Controllers;

class VenteController extends Controller
{
    public function index()
   {
        $ventes = [

        "1" => ["date" => '01-01-18',
        		"heure" => '13:02',
        		"sucre" =>'2',
    			"boisson"=> 'cafe'
    			],
        "2" => ["date" => '01-01-18',
        		"heure" => '13:11',
        		"sucre" =>'2',
    			"boisson"=> 'the'
    			],
        "3" => ["date" => '01-01-18',
        		"heure" => '13:12',
        		"sucre" =>'2',
    			"boisson"=> 'chocolat'
    			],
        "4" => ["date" => '01-01-18',
        		"heure" => '13:22',
        		"sucre" =>'2',
    			"boisson"=> 'cafe'
    			],
        ];
        
    return view('vente', compact('ventes'));
    }

}
