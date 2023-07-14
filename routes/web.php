<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/form-single', [App\Http\Controllers\FormController::class, 'single'])->name('form-single');
Route::post('/form-single', [App\Http\Controllers\FormController::class, 'storeSingle'])->name('form-single-store');
Route::get('/form-multiple', [App\Http\Controllers\FormController::class, 'multiple'])->name('form-multiple');
Route::post('/form-multiple', [App\Http\Controllers\FormController::class, 'storeMultiple'])->name('form-multiple-store');
