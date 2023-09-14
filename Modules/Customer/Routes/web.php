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

use Illuminate\Support\Facades\Route;
use Modules\Customer\Http\Controllers\CardController;
use Modules\Customer\Http\Controllers\TransactionController;

Route::prefix('customer')->middleware('role:customer')->group(function() {

    Route::get('card-verification', [CardController::class,'validationCard'])->name('card.validation');
    Route::post('card-validation', [CardController::class,'cardValidated'])->name('card.verify');

    Route::middleware(['permission:make transaction'])->group(function (){
        Route::get('/', 'CustomerController@index')->name('customer.dashboard');

        Route::group(['controller' => TransactionController::class, 'prefix' => 'transaction'], function (){
            Route::get('all', 'index')->name('client.transaction');
//           Route::get('client-transaction', 'client.transaction');
        });
    });



});
