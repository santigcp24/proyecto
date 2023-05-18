<?php

namespace App\Http\Controllers;

use App\Models\Client_pet;
use Illuminate\Http\Request;

class Client_petController extends Controller
{
   
    public function index()
    {
        $client_pets = Client_pet::All();
        return $client_pets;
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $client_pet = new Client_pet;
        $client_pet->id = $request->id;
       
        $client_pet->save();
        return $client_pet;
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        $client_pet = Client_pet::find($id);
        $client_pet->id = $request->id;
        $client_pet->pays = $request->pays;
        $client_pet->save();
        return $client_pet;    
    }

   
    public function destroy($id)
    {
        $Client =Client_pet::find($id);
        $Client->delete();
        return $Client;

    }
}
