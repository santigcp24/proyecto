@extends('layouts.plantilla')
@section('contenido')

    
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
               
                <h1>Tabla de usuarios</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{ url('/Person.index') }}" method="GET">
                   
                </form>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>last_name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>address</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_person as $persons)
                            <tr>
                                <td>{{ $persons->id }}</td>
                                <td>{{ $persons->name }}</td>
                                <td>{{ $persons->last_name }}</td>
                                <td>{{ $persons->email }}</td>
                                <td>{{ $persons->phone }}</td>
                                <td>{{ $persons->address }}</td>
                                <td>
                                    <a href="{{ url('/Person.edit', $persons->id) }}" class="btn btn-warning">Editar</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
   
   
        </div>
       
    </div>
@endsection