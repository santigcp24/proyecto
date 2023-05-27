<?php

use App\Http\Controllers\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



//ruta para cruds cliente
Route::controller(PersonController::class)->group(function(){
Route::get("/Person/{id}","show");
Route::put("/Person/{id}", "update");
Route::delete("/Person/{id}","destroy");
Route::post("/Person","store");
Route::get("/Person","index");  
});