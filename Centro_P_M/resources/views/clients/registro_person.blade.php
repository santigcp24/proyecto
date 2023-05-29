
@extends('layouts.app')
@section('content')


<div class="container"> 
    <div class="row"> 
      <div class="col-12 col-md-8 mx-auto my-5">

          <form>
  
          <h1>Proceso de registro del cliente</h1>
           <div class="col-md-6">
           <label for="inputNombre" class="form-label">Nombre</label>
           <input type="email" class="form-control" id="inputNom" placeholder="nombre">
           </div>
             <div class="col-md-6">
                 <label for="inputApellido" class="form-label">Apellido</label>
                 <input type="password" class="form-control" id="inputAp" placeholder="apellido">
             </div>
               <div class="col-12">
                   <label for="inputIdentificacion" class="form-label">Identificacion</label>
                   <input type="text" class="form-control" id="inputId" placeholder="identificacion">
               </div>
                  <div class="col-12">
                     <label for="inputCorreo" class="form-label">Correo electronico</label>
                     <input type="text" class="form-control" id="inputCo" placeholder="correo electronico">
                  </div>
                    <div class="col-md-6">
                    <label for="inputTel" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="inputTe" placeholder="telefono">
                    </div>
                       <div class="col-12">
                       <button type="submit" class="btn btn-primary">Registrar</button>
                       </div>
         </form>
      </div>
    </div> 
  </div>
    <div class="col-12 col-md-8 mx-auto my-5" >
      <h4>Registro de la mascota</h4>
      <button id="Siguiente_formulario">RP</button>
            <script type="text/javascript">
                document.getElementById("Siguiente_formulario").onclick = function () {
                 location.href = "http://127.0.0.1:5500/Front-end/registroPagina/interfazregistroPet.html";
                 };
            </script>
      <br>
    </div>

@endsection
