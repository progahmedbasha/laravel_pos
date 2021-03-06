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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('products', 'ProductsController@products_show');


Route::post('prostore', 'ProductsController@products_store');
Route::get('products/{data}/delete', 'ProductsController@delete');

// Route::get('products/{data}/edite', 'ProductsController@edite');
// Route::post('products/{data}/update', 'ProductsController@update');

Route::get('suppliers', 'SuppliersController@suppliers_show');
Route::post('supp_store', 'SuppliersController@suppliers_store');
Route::get('categories', 'CategoriesController@categories_show');
Route::post('cat_store', 'CategoriesController@categories_store');