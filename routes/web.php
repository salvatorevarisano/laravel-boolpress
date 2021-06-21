<?php

use Illuminate\Support\Facades\Route;
// per evitare che vs code segnali come errore Auth::routes()
use Illuminate\Support\Facades\Auth;

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


// Rotte autenticazione
Auth::routes();

// Rotte amministrazione 
// Dashboard post login
// Route::get('/admin', 'HomeController@index')->name('home');
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->name('admin.')
    ->group(function()
    {
        //rotta home admin
        Route::get('/', 'HomeController@index')->name('home');

        //rotta resource post
        Route::resource('posts', 'PostController');
    });

// Front office 
Route::get('{any?}', function () {
    return view('guest.home');
})->where('any', '.*');
