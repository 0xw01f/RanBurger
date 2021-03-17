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

Route::view('/','welcome')->name('welcome');
Route::get('/', [App\Http\Controllers\BurgerController::class, 'stats']);

// Quand le chemin /about est demandé on affiche la page about
Route::view('/about','about')->name('about');

// Appeller la fonction list de BurgerController
Route::get('/create', [App\Http\Controllers\BurgerController::class, 'list'])->name('create');

//  For a POST form
Route::post('/create', [App\Http\Controllers\BurgerController::class, 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::post('update/', [App\Http\Controllers\BurgerController::class, 'update']);
   
