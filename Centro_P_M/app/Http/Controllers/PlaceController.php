<?php

namespace App\Http\Controllers;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{

    public function index()
    {
        $Places = Place::all();
        return $Places;
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $Place = new Place;
        $Place->id = $request->id;
        $Place->name = $request->namePet;
        $Place->address = $request->address;
        
        
        $Place -> save();
        return $Place;
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
        $Place = Place::findOrFail($request->id);
        $Place->id = $request->id;
        $Place->name = $request->namePet;
        $Place->address = $request->address;
        $Place -> save();
        return $Place;
    }

    
    public function destroy($id)
    {
        $Place =Place::find($id);
        $Place->delete();
        return $Place;
    }
}
