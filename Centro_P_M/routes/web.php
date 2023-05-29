<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\View\inicio;
use App\Http\Controllers\PersonController;



Route::resource('/person', 'App\Http\Controllers\PersonController');
Route::get('download-pdf','App\Http\Controllers\PersonController@generar-pdf')-> name('descargar pdf');

Route::get('/', function(){
    return view('inicio.Interfaz_inicio');
}); 
Route::get('/tabla', function(){
    return view('clients.index');
}); 
Route::get('/registro', function(){
    return view('clients.registro_person');
}); 
Route::get('/registropets', function(){
    return view('clients.index_pets');
}); 



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
//Route::resource('Client','App\Http\Controllers\ClientController') ->middleware('auth');
//Route::resource('Date','App\Http\Controllers\DateController') ->middleware('auth');
//Route::resource('DogWalker','App\Http\Controllers\DogWalkerController') ->middleware('auth');
//Route::resource('Pet','App\Http\Controllers\PetController') ->middleware('auth');
//Route::resource('Service','App\Http\Controllers\ServiceController') ->middleware('auth');

