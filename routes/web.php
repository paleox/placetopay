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
    return redirect('/payments');
});

Route::get('payments/generate-reference', 'PaymentController@getReference');
Route::get('payments/{payment}/{redirected?}', 'PaymentController@show')->name('payments.show');
Route::resource('payments', 'PaymentController')->only([
    'index',
    'store',
    'update'
]);

Route::resource('buyers', 'BuyerController')->only([
    'store'
]);