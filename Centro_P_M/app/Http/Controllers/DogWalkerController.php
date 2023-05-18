<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use App\Models\DogWalker;
use Illuminate\Http\Request;

class DogWalkerController extends Controller
{
    
    public function index()
    {
        $DogWalkers = DogWalker::all();
        return $DogWalkers;
    }

    
    public function create()
    {
        return view('servicee.registro_dogwalker');
    }

    
    public function store(Request $request)
    {
        $DogWalker = new DogWalker;
        $DogWalker->id = $request->id;
        $DogWalker->name = $request->name;
        $DogWalker->phone = $request->phone;
        $DogWalker->save();
        return $DogWalker;



    }

    
    public function show(DogWalker $dogWalker)
    {
        //
    }

    
    public function edit(DogWalker $id)
    {
        $DogWalker = DogWalker::find($id);
        return $DogWalker;
    }

    
    public function update(Request $request, DogWalker $id)
    {
        $DogWalker = DogWalker::find($id);
        $DogWalker->id = $request->id;
        $DogWalker->name = $request->name;
        $DogWalker->phone = $request->phone;
        $DogWalker->save();
        return $DogWalker;
    }

    
    public function destroy(DogWalker $id)
    {
        $dogWalke =DogWalker::find($id);
        $dogWalke->delete();
        return $dogWalke;

    }
}
