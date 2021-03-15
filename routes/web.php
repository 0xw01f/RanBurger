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

Route::view('/','welcome');

Route::view('/contact','contact');
// Quand le chemin /about est demandé on affiche la page about
Route::view('/about','about');

// Appeller la fonction list de ClientsController
Route::get('/clients', [App\Http\Controllers\ClientsController::class, 'list']);