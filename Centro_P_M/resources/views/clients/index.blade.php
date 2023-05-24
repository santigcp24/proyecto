@extends('layouts.app')
@section('content')


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
                            <th>lastname</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>addres</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_person as $persons)
                            <tr>
                                <td>{{ $persons->id }}</td>
                                <td>{{ $persons->name }}</td>
                                <td>{{ $persons->lastname }}</td>
                                <td>{{ $persons->email }}</td>
                                <td>{{ $persons->phone }}</td>
                                <td>{{ $persons->addres }}</td>
                                <td>
                                    

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
   
   
        </div>
       
    </div>
           


  


@endsection