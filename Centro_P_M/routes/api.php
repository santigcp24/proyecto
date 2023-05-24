<?php
use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//ruta para cruds cliente
Route::controller(PersonController::class)->group(function(){
Route::get("/Person/{id}","show");
Route::put("/Person/{id}", "update");
Route::delete("/Person/{id}","destroy");
Route::post("/Person","store");
Route::get("/Person","index");  
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
