<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// test api endpoint
Route::get('/test', function() {
    return response()->json([
        'names' => ['Luca', 'Gianni', 'Luigi']
    ]);
});

// get posts  
Route::namespace('Api')->group(function() {
    //get posts
    Route::get('/posts', 'PostController@index');

});
