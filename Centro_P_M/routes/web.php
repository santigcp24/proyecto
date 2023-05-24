<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/usuarios', [App\Http\Controllers\PersonController::class, 'index']);

Route::get('/', function(){
    return view('Interfaz_inicio');
}); 


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
//Route::resource('Client','App\Http\Controllers\ClientController') ->middleware('auth');
//Route::resource('Date','App\Http\Controllers\DateController') ->middleware('auth');
//Route::resource('DogWalker','App\Http\Controllers\DogWalkerController') ->middleware('auth');
//Route::resource('Pet','App\Http\Controllers\PetController') ->middleware('auth');
//Route::resource('Service','App\Http\Controllers\ServiceController') ->middleware('auth');

