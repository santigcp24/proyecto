<?php
use App\Http\Controllers\ClientController;
use App\Http\Controllers\petController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DogWalkerController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//ruta para cruds cliente
Route::controller(ClientController::class)->group(function(){
Route::get("/Client/{id}","show");
Route::put("/Client/{id}", "update");
Route::delete("/Client/{id}","destroy");
Route::post("/Client","store");
Route::get("/Client","index");  
});
//ruta para cruds servicio
//Route::controller(ServiceController::class)->group(function(){
//Route::get("/Service/{IdSitioPK}",  "show");
//Route::put("/Service/{IdSitioPK}", "update");
//Route::delete("/Service/{IdSitioPK}", "destroy");
//Route::post("/Service",  "store");
//Route::get("/Service", "index");
//});

//ruta para cruds fecha de paseo
//Route::controller(DateController::class)->group(function(){
//Route::get("/Date/{  }","show");
//Route::put("/Date/{  }", "update");
//Route::delete("/Date/{  }", "destroy");
//Route::post("/Date", "store");
//Route::get("/Date",  "index");
//});
//ruta para cruds paseadores
//Route::controller(DogWalker::class)->group(function(){
//Route::get("/DogWalker/{CC_P_PK}", "show");
//Route::put("/DogWalker/{CC_P_PK}", "update");
//Route::delete("/DogWalker/{CC_P_PK}","destroy");
//Route::post("/DogWalker", "store");
//Route::get("/DogWalker", "index");
//});

//ruta para cruds mascotas
//Route::controller(PetController::class)->group(function(){
//Route::get("/pet/{IdPet}", "show");
//Route::put("/pet/{IdPet}", "update");
//Route::delete("/pet/{IdPet}", "destroy");
//Route::post("/pet", "store");
//Route::get("/pet", "index");
//});
