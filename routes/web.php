<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// mostra i comic
Route::get('/comic','ComicController@index')->name('comic.index');

// //rotta che mostra il form
Route::get("/comic/create", "ComicController@create")->name("comic.create");

// //salva i dati creando un nuovo comic
Route::post("/comic/create", "ComicController@store")->name("comic.store");

// //mostra un solo comic nel dettaglio
 Route::get('/comic/{comic}','ComicController@show')->name('comic.show');

// //salva i dati inseriti nel form 'modifica'
// Route::match(["PUT", "PATCH"], "/comics/{comic}", "ComicController@update")->name('comics.update');

// //eliminare un comic
// Route::delete('/comics/{comic}','ComicController@destroy')->name('comics.destroy');

// //mostra il form per modificare un comic
// Route::get('/comics/{comic}/edit','ComicController@edit')->name('comics.edit');