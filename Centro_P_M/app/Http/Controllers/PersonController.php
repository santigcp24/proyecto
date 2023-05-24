<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
   
    
    public function index()
    {
        $persons = Person::All();
        $dato['data_person'] = $persons; 

        return view('clients.index',$dato);
        

    }

    
    public function create()
    {
        return view('clients.registro_person');
    }

    
    public function store(Request $request)
    {
        $Person = new Person;
        $Person->id = $request->id;
        $Person->name = $request->name;
        $Person->lastname = $request->lastname;
        $Person->Identy = $request->Identy;
        $Person->email = $request->email;
        $Person->phone = $request->phone;
        $Person->save();
        return $Person;
    }

    
    public function show(Person $client)
    {
        //
    }

    
    public function edit(Person $client)
    {
        
    }
   
    public function update(Request $request, $id)
    {
        $person = new Person;
        $person->id = $request->id;
        $person->name = $request->name;
        $person->lastname = $request->lastname;
        $person->Identy = $request->Identy;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->save();
        return $person;

    }

    
    public function destroy(Person $id)
    {
        $person =Person::find($id);
        $person->delete();
        return  $person;

    }
    

    
}


