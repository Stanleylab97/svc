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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except'=>['show','store','create']]);
});


Route::get('addelement/{element}',['as' => 'addelement', 'uses' => 'CommandeController@addToVirtualList']); 

Route::namespace('\\App\\Http\\Controllers')->prefix('manage')->name('resource.')->middleware('can:manage-users')->group(function(){
    Route::resource('/commande','CommandeController');
});




