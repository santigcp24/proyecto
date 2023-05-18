<?php
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




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

Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
//Route::resource('Client','App\Http\Controllers\ClientController') ->middleware('auth');
//Route::resource('Date','App\Http\Controllers\DateController') ->middleware('auth');
//Route::resource('DogWalker','App\Http\Controllers\DogWalkerController') ->middleware('auth');
//Route::resource('Pet','App\Http\Controllers\PetController') ->middleware('auth');
//Route::resource('Service','App\Http\Controllers\ServiceController') ->middleware('auth');



Auth::routes();
