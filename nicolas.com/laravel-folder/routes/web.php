<?php

Route::group([ 'middleware'=>'auth'], function()
{
    Route::get('/', 'WelcomeController@index');

    Route::get('boisson', 'BoissonController@index');

    Route::post('boisson', 'BoissonController@form');

    Route::get('boissonZA', 'BoissonController@unordered');

    Route::get('boissonPC', 'BoissonController@prixCroissant');

    Route::get('boissonPD', 'BoissonController@prixDecroissant');

    Route::get('boisson/{id}', 'BoissonController@details')->name('details');

    Route::post('boisson/{id}', 'BoissonController@update');

    Route::delete('boisson/{id}', 'BoissonController@delete')->name('boisson.delete');

    Route::get('ingredients', 'IngredientsController@index');

    Route::post('ingredients', 'IngredientsController@form');

    Route::get('ingredients/{id}', 'IngredientsController@details')->name('detailsIngredients');

    Route::post('ingredients/{id}', 'IngredientsController@update');

    Route::delete('ingredients/{id}', 'IngredientsController@delete')->name('ingredients.delete');

    Route::get('monnayeur', 'MonnayeurController@index');

    Route::get('recette', 'RecetteController@index');

    Route::get('vente', 'VenteController@index');

    Route::post('recette', 'RecetteController@form');

    Route::get('boisson/{boisson}/delete-ingredient/{ingredient}', 'RecetteController@deleteRecette')->name('recette.delete');

});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('machineCoffee', 'MachineCoffeeController');
?>
