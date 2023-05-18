<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
    public function index()
    {
        $Services = Service::all();
        return $Services;
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $Service = new Service;
        $Service->IdLocation_PK = $request->IdLocation_PK;
        $Service->NameLocation = $request->NameLocation;
        $Service->DirLocation = $request->DirLocation;
        $Service->Date_walk = $request->Date_walk;
        $Service -> save();
        return $Service;

    }

    
    public function show(Service $service)
    {
        //
    }

    
    public function edit(Service $IdLocation_PK)
    {
        $Service = Service::find($IdLocation_PK);
        return $Service;
    }

    
    public function update(Request $request, Service $IdLocation_PK)
    {
        $Service = Service::find($IdLocation_PK);
        $Service->IdLocation_PK = $request->IdLocation_PK;
        $Service->NameLocation = $request->NameLocation;
        $Service->DirLocation = $request->DirLocation;
        $Service->Date_walk = $request->Date_walk;
        $Service -> save();
        return $Service;
    }

    
    public function destroy(Service $IdLocation_PK)
    {
        $Service = Service::find($IdLocation_PK);
        $Service->delete();
        return $Service;
       
    }
}
