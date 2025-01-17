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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/donation', [EventController::class, 'donation'])->middleware('auth');; 

Route::get('/events/{id}', [EventController::class, 'show']);

Route::get('contact', [EventController::class, 'contact']);

Route::post('/events', [EventController::class, 'store']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::post('donation',[App\Http\Controllers\RegisterController::class, 'store']);

Route::delete('events/{id}',[EventController::class, 'destroy']);
