<?php

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

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('/');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/plastice-waste-replace', [App\Http\Controllers\MainController::class, 'plastice_waste_replace'])->name('plastice_waste_replace');
Route::get('/change_language/{lan}', [App\Http\Controllers\MainController::class, 'change_language']);
Route::post('/general/contactus', [App\Http\Controllers\MainController::class, 'general_contactus'])->name('general_contactus');
