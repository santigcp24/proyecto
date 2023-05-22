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
        $Service->date = $request->date;
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

    
    public function update(Request $request, Service $id)
    {
        $Service = Service::find($id);
        $Service->date= $request->date;
        $Service -> save();
        return $Service;
    }

    
    public function destroy(Service $id)
    {
        $Service = Service::find($id);
        $Service->delete();
        return $Service;
       
    }
}
