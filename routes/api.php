<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;

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



Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');




Route::group(['middleware' => 'auth:api'], function() {

//     //Route::resource('products', ProductController::class);

    Route::get('payments', 'PaymentController@index');
    Route::get('payments/{payment}', 'PaymentController@show');
    Route::post('payments', 'PaymentController@store');
    Route::put('payments/{payment}', 'PaymentController@update');
    Route::delete('payments/{payment}', 'PaymentController@delete');
    Route::post('logout', 'AuthController@logout');
 });

