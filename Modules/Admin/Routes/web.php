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
use Modules\Admin\Http\Controllers\TransactionController;

Route::prefix('admin')->middleware('role:admin')->group(function() {
    Route::get('/dashboard', 'AdminController@index');

    Route::group(['prefix' => 'transaction', 'controller' => TransactionController::class], function () {
       Route::get('/all', 'index')->name('admin.transaction.all');
       Route::delete('/delete/{id}', 'destroy')->name('admin.transaction.delete');
    });
});
