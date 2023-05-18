<?php

namespace App\Http\Controllers;

use App\Models\pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    
    public function index()
    {
        $pets = pet::all();
        return $pets;

    }

    
    public function create()
    {
        return view('clients.registro_pet');
    }

    
    public function store(Request $request)
    {
        $Pet = new pet;
        $Pet->id = $request->id;
        $Pet->name = $request->namePet;
        $Pet->breed = $request->breed;
        $Pet->age_pet = $request->age_pet;
        
        $Pet -> save();
        return $Pet;
    }

   
    public function show(pet $pet)
    {
        //
    }

   
    public function edit(pet $pet)
    {
        
    }

    
    public function update(Request $request, pet $id)
    {
        
        $Pet = pet::findOrFail($request->id);
       
        $Pet->name = $request->name;
        $Pet->breed = $request->breed;
        $Pet->age_pet = $request->age_pet;

        $Pet -> save();
        return $Pet;
    }

    
    public function destroy(pet $id)
    {
        $Pet =pet::find($id);
        $Pet->delete();
        return $Pet;

    }
}
