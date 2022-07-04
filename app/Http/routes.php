<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('results/(:all)', array('uses'=>'UserController@results'));

Route::get('/registracija', function () {
    return view('registracija');
});

Route::post('/registracija', [
    'uses' => 'UserController@postRegistracija',
    'as' => 'registracija'
]);
Route::post('/search', [
    'uses' => 'UserController@search',
    'as' => 'search']);
Route::post('/pretraga', [
    'uses' => 'UserController@postPretraga',
    'as' => 'pretraga'
]);
Route::post('/prijava', [
    'uses' => 'UserController@postPrijava',
    'as' => 'prijava'
]);

Route::get('/uspjeh', [
    'uses' => 'UserController@getUspjeh',
    'as' => 'uspjeh',
    'middleware' => 'auth'
]);

Route::get('/pretraga-uspjeh', [
    'uses' => 'UserController@getPretragaUspjeh',
    'as' => 'pretraga-uspjeh',
    'middleware' => 'auth'
]);
Route::get('/pocetna', [
    'uses' => 'UserController@getPocetna',
    'as' => 'pocetna',
    'middleware' => 'auth'
]);
Route::get('/pretraga-knjiga', [
    'uses' => 'UserController@getKnjige',
    'as' => 'pretraga-knjiga',
    'middleware' => 'auth'
]);
Route::get('/dobrodosli', [
    'uses' => 'UserController@getDobrodosli',
    'as' => 'dobrodosli',
    'middleware' => 'auth'
]);
Route::get('/moje-knjige', [
    'uses' => 'UserController@getMoje',
    'as' => 'moje-knjige',
    'middleware' => 'auth'
]);
Route::get('/odjava', [
    'uses' => 'UserController@postOdjava',
    'as' => 'odjava',
    'middleware' => 'auth'
]);

Route::get('/admin', ['middleware' => 'admin', function () {
    return view('admin');
}]);
Route::get('/knjige', 'KnjigeController@index');



Route::auth();

Route::get('/home', 'HomeController@index');
