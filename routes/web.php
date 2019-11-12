<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/domaine-de-competences','PagesController@domaine_competences')->name('domaine') ;
Route::get('/nos-clients','PagesController@nos_clients')->name('nos_clients') ;

Route::get('/references','PagesController@references')->name('references') ;
Route::get('/projets','PagesController@projets')->name('projets') ;
Route::get('/projets/en-cours','PagesController@project_en_cours')->name('project_en_cours') ;
Route::get('/about','PagesController@about')->name('about') ;
Route::get('/nos-experts','PagesController@experts')->name('experts') ;





