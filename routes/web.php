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




Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@fill');

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@fill');

Route::get('/', 'usersController@list');

Route::group([
    'middleware' => 'App\Http\Middleware\Auth'
], function (){


Route::get('/Account', 'AccountController@Acceuil');

Route::get('/logout', 'AccountController@logout');

Route::get('/updateprofil', 'AccountController@update');
Route::post('/Newpassword', 'AccountController@newpassword');

Route::post('/messages', 'messagesController@new');
Route::get('/people/{name}', 'usersController@see');

Route::post('/{name}/follow', 'FollowController@new');
Route::delete('/{name}/follow', 'FollowController@delete');

Route::get('/Reviews', 'ReviewController@index');
Route::post('/add_Review', 'ReviewController@add');

Route::get('/review_page', 'ReviewController@page');
Route::get('/review_t/{prod}', 'ReviewController@article');

});




//Route::get('/people/{email}', 'usersController@see');