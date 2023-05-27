@extends('layouts.app')
@section('content')
<header>
<link rel="stylesheet" href="{{ asset('views/inicio/css/inicio.css') }}">
        <div class="navigation">
            <div id="logo">
                <img id="mascotasClubLogo" src="/Front-end/public/assets/mascotaClubIcon.png" alt="logoMascotasCLub">
            </div>
            <div id="navigationBar">
                <input type="text" class="form-control" id="navigationInput" placeholder="Search">
            </div>
            <div id="login">
                <button type="button" class="btn btn-outline-primary" >Login</button>
            </div>
        </div>
        <div class="banner">
            <div id="eslogan">
                <h1>Mascotas Club</h1>
                <h2><em>La mejor guardería para tu mascota</em></h1>
                <button id="Iniciosesion" class="btn btn-primary">Agendate</button>
                <script type="text/javascript">
                    document.getElementById("Iniciosesion").onclick = function () {
                     location.href = "http://127.0.0.1:5500/Front-end/JoinUser/Join.html";
                     };
                </script>
            </div>
            <div id="imageBanner">
                <img src="{{asset('public/images/')}}" alt="bannerMascotaClub" style="width: 300px;">
            </div>
        </div>
    </header>
    <section>
        <div class="containerSection">
            <!--Carta para paseador-->
            <div class="card" style="width: 29rem;">
                <img class="card-img-top" src="./assets/paseadorImage.jpg" alt="imagenPaseador">
                <div class="card-body">
                    <h5 class="card-title">Paseador</h5>
                    <p class="card-text">Encuentra información relevante acerca de nuestros paseadores</p>
                    <button type="button" class="btn btn-primary">Informacion del paseador</button>
                </div>
            </div>
            <!--Carta para detalle del sitio-->
            <div class="card" style="width: 29rem;">
                <img class="card-img-top" src="./assets/lugarImage.jpg" alt="imagenPaseador">
                <div class="card-body">
                    <h5 class="card-title">Lugares paseo</h5>
                    <p class="card-text">Encuentra la información relevante a cerca de las areas de paseo</p>
                    <button id="Sitios de paseo"  class="btn btn-primary">Detalle del lugar</button>
                     <script type="text/javascript">
                          document.getElementById("Sitios de paseo").onclick = function () {
                             location.href = "http://127.0.0.1:5500/Front-end/detalleSitioPage/Detalle_del_sitio.html";
                               };
                            </script>

                </div>
            </div>
            <!--Carta para contacto empresa-->
            <div class="card" style="width: 29rem;">
                <img class="card-img-top" src="./assets/contactarImage.jpg" alt="imagenPaseador">
                <div class="card-body">
                    <h5 class="card-title">Empresa</h5>
                    <p class="card-text">Si necesitas más información de nosotros no dudes en llamarnos</p>
                    <button type="button" class="btn btn-primary">Contactar</button>
                </div>
            </div>
        </div> 
    </section>
    <footer>
        <div class="containerFooter">
            <div class="contact"> 
                <h3>Contactanos</h3>
            </div>
            <div class="navigationFooter"> 
                <h3>Links</h3>
            </div>
            <div class="aboutuS"> 
                <h3>Sobre nosotros</h3>
            </div>
        </div>
    </footer>



@endsection