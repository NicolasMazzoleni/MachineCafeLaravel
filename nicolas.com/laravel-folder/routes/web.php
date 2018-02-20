<?php

Route::group([ 'middleware'=>'auth'], function()
{
    Route::get('boisson', 'BoissonController@index')->middleware('can:showBoisson');

    Route::post('boisson', 'BoissonController@form')->middleware('can:showBoisson');

    Route::get('boissonZA', 'BoissonController@unordered')->middleware('can:showBoisson');

    Route::get('boissonPC', 'BoissonController@prixCroissant')->middleware('can:showBoisson');

    Route::get('boissonPD', 'BoissonController@prixDecroissant')->middleware('can:showBoisson');

    Route::get('boisson/{id}', 'BoissonController@details')->name('details')->middleware('can:showBoisson');

    Route::post('boisson/{id}', 'BoissonController@update')->middleware('can:showBoisson');

    Route::delete('boisson/{id}', 'BoissonController@delete')->name('boisson.delete')->middleware('can:showBoisson');

    Route::get('ingredients', 'IngredientsController@index')->middleware('can:showIngredients');

    Route::post('ingredients', 'IngredientsController@form')->middleware('can:showIngredients');

    Route::get('ingredients/{id}', 'IngredientsController@details')->name('detailsIngredients')->middleware('can:showIngredients');

    Route::post('ingredients/{id}', 'IngredientsController@update')->middleware('can:showIngredients');

    Route::delete('ingredients/{id}', 'IngredientsController@delete')->name('ingredients.delete')->middleware('can:showIngredients');

    Route::get('monnayeur', 'MonnayeurController@index')->middleware('can:showMonnayeur');

    Route::get('recette', 'RecetteController@index')->middleware('can:showRecette');

    Route::post('recette', 'RecetteController@form')->middleware('can:showRecette');

    Route::get('boisson/{boisson}/delete-ingredient/{ingredient}', 'RecetteController@deleteRecette')->name('recette.delete')->middleware('can:showRecette');

    Route::get('vente', 'VenteController@index')->middleware('can:showVente');

    Route::get('vente/{id}/delete-vente', 'VenteController@delete')->middleware('can:showVente');

    Route::get('admin', 'AdminController@index')->middleware('can:showSuperAdminPage');

    Route::get('admin/{id}', 'AdminController@details')->middleware('can:showSuperAdminPage');

    Route::post('admin/{id}', 'AdminController@update')->middleware('can:showSuperAdminPage');

    Route::get('user/{id}/delete-user', 'AdminController@delete')->name('user.delete')->middleware('can:showSuperAdminPage');


});
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/', 'MachineCoffeeController');
?>
