<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PayController;
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
    return redirect('/list-client');
});

Route::get('/pay/{id}', [PayController::class, 'createPay'])->name('create-pay');            
Route::get('/list-client', [ClientController::class, 'listClient'])->name('list-client');            
Route::get('/list-client-process/{id}', [ClientController::class, 'listClientProcess'])->name('list-client-process');            
Route::get('/create-client', [ClientController::class, 'create'])->name('create-client');            
Route::post('/create-client', [ClientController::class, 'store'])->name('store-client');  

Route::get('/create-pay-boleto/{id}', [PayController::class, 'createPayBoleto'])->name('pay-boleto');            
Route::post('/create-pay-boleto', [PayController::class, 'storePayBoleto'])->name('store-pay-boleto');            

Route::get('/create-pay-pix/{id}', [PayController::class, 'createPayPix'])->name('pay-pix');            
Route::post('/create-pay-pix', [PayController::class, 'storePayPix'])->name('store-pay-pix');      
Route::get('/show-pay-pix/{id}', [PayController::class, 'showPayPix'])->name('show-pix');            


Route::get('/create-pay-card/{id}', [PayController::class, 'createPayCard'])->name('pay-card');            
Route::post('/create-pay-card', [PayController::class, 'storePayCard'])->name('store-pay-card');  