
@extends('layouts.app')
@section('content')


    <div class="container">
      <hr>
      <button type="button" class="btn btn-primary btn-lg">Inicio</button>
      <hr>
      <h1>Proceso de registro del usuario</h1>
      <hr>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">  name  </label>
        <input type="nombre" class="form-control" id="exampleFormControlInput1" placeholder="nombre">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><Em>lastname</Em></label>
        <input type="apellido" class="form-control" id="exampleFormControlInput1" placeholder="apellido">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Identy</label>
        <input type="identificacion" class="form-control" id="exampleFormControlInput1" placeholder="identificacion">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">phone</label>
        <input type="telefono" class="form-control" id="exampleFormControlInput1" placeholder="telefono">
      </div>
      
      <hr>
     
      <br>
      <button type="submit" class="btn btn-primary btn-lg">Ingresar</button><br>
      <br>
      <h4>Proceso de registro de la mascota</h4>
      <button id="Siguiente formulario">Haz click aquí</button>
            <script type="text/javascript">
                document.getElementById("Siguiente formulario").onclick = function () {
                 location.href = "http://127.0.0.1:5500/Front-end/registroPagina/interfazregistroPet.html";
                 };
            </script>
      <br>
    </div>

@endsection
