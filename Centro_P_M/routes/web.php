<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\View\inicio;
use App\Http\Controllers\PersonController;



Route::get('/person', [App\Http\Controllers\PersonController::class, 'index']);

Route::get('/', function(){
    return view('inicio.Interfaz_inicio');
}); 


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
//Route::resource('Client','App\Http\Controllers\ClientController') ->middleware('auth');
//Route::resource('Date','App\Http\Controllers\DateController') ->middleware('auth');
//Route::resource('DogWalker','App\Http\Controllers\DogWalkerController') ->middleware('auth');
//Route::resource('Pet','App\Http\Controllers\PetController') ->middleware('auth');
//Route::resource('Service','App\Http\Controllers\ServiceController') ->middleware('auth');

