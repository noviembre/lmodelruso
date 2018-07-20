<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', 'Admin\DashboardController@index');

/*
|--------------------------------------------------------------------------
| G R U P O   A D M I N
|--------------------------------------------------------------------------
|
| Contiene las rutas que solo el admin puede ver o editar.
|
|
*/
Route::group(['prefix'=>'admin','namespace'=>'Admin', ], function(){
    Route::get('/', 'DashboardController@index');

    #=================   CATEGORIAS   ====================
    Route::resource('/categories', 'CategoriesController');

    #=================   TAGS   ====================
    Route::resource('/tags', 'TagsController');

    #=================   USUARIOS   ====================
    Route::resource('/users', 'UsersController');

});