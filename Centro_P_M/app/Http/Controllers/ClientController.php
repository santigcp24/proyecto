<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    
    public function index()
    {
        $clients = Client::All();
        return $clients;
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $Client = new Client;
        $Client->id = $request->id;
        $Client->pays = $request->pays;
        $Client->save();
        return $Client;


        

    }

    
    public function show(Client $client)
    {
        //
    }

    
    public function edit(Client $client)
    {
        
    }
   
    public function update(Request $request, $id)
    {
        $Client = Client::find($id);
        $Client->id = $request->id;
        $Client->pays = $request->pays;
        $Client->save();
        return $Client;

    }

    
    public function destroy(Client $id)
    {
        $Client =Client::find($id);
        $Client->delete();
        return $Client;

    }
    
    
    
}
