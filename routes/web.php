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

Route::get('/', 'Controller@home');
Route::post('/', 'OrderController@new');
Route::get('/orders/{uniqid}', 'OrderController@find'); // show
Route::post('/orders/{uniqid}', 'OrderController@update'); // update
// Route::get('checkout', 'OrderController@getCheckout'); // checkout landing
// Route::post('checkout', 'OrderController@postCheckout'); // checkout post
Route::prefix('gallery')->group(function () {
    Route::get('', 'Controller@gallery');
    Route::get('{id}', 'Controller@imageView');
});
