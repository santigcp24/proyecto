
@extends('layouts.registro_plantilla')
@section('plantilla_registro')
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/interfazRegistro.css" >
    <title>Document</title>
</head>
<body>

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
</body>
</html>
@endsection
