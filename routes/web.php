<?php

use App\Http\Controllers\epaargePloqueeController;
use App\Http\Controllers\EpargneCreditController;
use App\Http\Controllers\Tontine1Controller;
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

Route::resource('epargnebloquee',epaargePloqueeController::class);
Route::resource('epargnecredit',EpargneCreditController::class);
Route::resource('tontine1',Tontine1Controller::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
