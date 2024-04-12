<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController; 
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\TelefonoController; 


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

/*
Route::get('/principal', function () {
    return view('layouts.principal');
});
*/

Route::resource('/persona', 'App\Http\Controllers\PersonaController');

Route::resource('/telefono', 'App\Http\Controllers\TelefonoController');

Route::resource('/correo', 'App\Http\Controllers\CorreoController');



Route::get('/telefono/create/{id}', [TelefonoController::class, 'create']);

Route::get('/correo/create/{id}', [CorreoController::class, 'create']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


