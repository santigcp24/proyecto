@extends('layouts.app')
@section('content')


    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Tabla de mascotas</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{ url('/Pet.index') }}" method="GET">
                   
                </form>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>breed</th>
                            <th>age_pet</th>
                             
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_pets as $pets)
                            <tr>
                                <td>{{ $pets->id }}</td>
                                <td>{{ $pets->name }}</td>
                                <td>{{ $pets->breed }}</td>
                                <td>{{ $pets->age_pet }}</td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
       
    </div>
           


  


@endsection