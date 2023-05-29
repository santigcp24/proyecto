<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\PDF;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
   
    
    public function index()
    {
        $persons = Person::All();
        $data_person['data_person'] = $persons; 

        return view('clients.index',$data_person);
        

    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {   
        $Person = new Person;
        $Person->id = $request->id;
        $Person->name = $request->name;
        $Person->last_name = $request->last_name;
        $Person->Identy = $request->Identy;
        $Person->email = $request->email;
        $Person->phone = $request->phone;
        $Person->save();
        return $Person;
    }

    
    public function show(Person $person)
    {
        //
    }

    
    public function edit(Person $person)
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
    
    public function generar_pdf(){
        $person = Person::all();
        $pdf = PDF::loadView('clients.generar_pdf', compact('person'));
        return $pdf->download('person.pdf');
    }
    
}


