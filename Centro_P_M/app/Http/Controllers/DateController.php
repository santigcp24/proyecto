<?php

namespace App\Http\Controllers;

use App\Models\Date;
use Illuminate\Http\Request;

class DateController extends Controller
{
    
    public function index()
    {
        $Date = Date::all();
        return $Date;
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $Date = new Date;
        $Date->Date_walk = $request->Date_walk;
        $Date -> save();
        return $Date;
        
        
    }

    
    public function show(Date $date)
    {
        //
    }

    
    public function edit(Date $Date_walk)
    {
        $Date = Date::find($Date_walk);
        return $Date;
    }

    
    public function update(Request $request, Date $Date_walk)
    {
        $Date = Date::find($Date_walk);
        $Date->Date_walk = $request->Date_walk;
        $Date -> save();
        return $Date;
    }

    
    public function destroy(Date $Date_walk)
    {
        $Date = Date::find($Date_walk);
        $Date->delete();
        return $Date;
        
    }
}
