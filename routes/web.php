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

Route::view('/','welcome')->name('home');

Route::view('/contact','contact')->name('contact');
// Quand le chemin /about est demandé on affiche la page about
Route::view('/about','about')->name('about');

// Appeller la fonction list de ClientsController
Route::get('/clients', [App\Http\Controllers\ClientsController::class, 'list'])->name('clients');

Route::get('/create', [App\Http\Controllers\BurgerController::class, 'list'])->name('create');

//  For a POST form
Route::post('/create', [App\Http\Controllers\BurgerController::class, 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
