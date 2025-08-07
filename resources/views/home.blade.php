@extends('layouts.main')

@section('contenido')
<div class="carousel-inner position-relative">
    <div class="carousel-item active">
        <div class="image-overlay-container">
            <img src="/img/MAIN.png" class="overlay-image" alt="...">
            <div class="dark-overlay">
                <div class="gradient-overlay"></div>
            </div>
        </div>

        <!-- Texto sobre la imagen -->
        <div class="carousel-caption text-center d-flex flex-column justify-content-center align-items-center"
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 90%;">
            <h1 class="display-4 text-white">Viaja con Smart Transports</h1>
            <p class="lead text-white">En Smart Transports, somos una agencia de viajes especializada en ofrecer servicios de transporte seguro, puntual y cómodo hacia Tehuacán, Puebla y Ciudad de México.</p>
<!--             <button type="button" class="btn btn-dark">Ver más</button>
 -->        </div>
    </div>

    <!-- Cards superpuestas centradas -->
    <div class="cartas container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center">
                <div class="card custom-card">
                    <img src="/img/teh.png" width="100" height="250" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                    <a href="{{route('trips')}}" class="btn btn-dark">Ver mas</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center">
                <div class="card custom-card">
                    <img src="/img/PUE.jpg" width="100" height="250" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                    <a href="{{route('trips')}}" class="btn btn-dark">Ver mas</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center">
                <div class="card custom-card">
                    <img src="/img/mx.jpg" width="100" height="250" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                    <a href="{{route('trips')}}" class="btn btn-dark">Ver mas</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex justify-content-center">
                <div class="card custom-card">
                    <img src="/img/CUAC.jpg" width="100" height="250" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                    <a href="{{route('trips')}}" class="btn btn-dark">Ver mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <hr><br>
        <center>
            <h3><b>En Smart Transports,</b> somos una agencia de viajes especializada en ofrecer
                servicios de transporte seguro, puntual y cómodo hacia Tehuacán, Puebla y Ciudad de México.</h3>
        </center>
        <br>
        <hr>
    </div>



</div>


<!-- card con texto y imagen  -->
<div class="container">
    <div class="card2">
        <div class="card-body2 row align-items-center">
            <!-- Columna del video -->
            <div class="col-md-6">
                <video width="100%" autoplay loop muted playsinline>
                    <source src="/img/Final.mp4" type="video/mp4">
                    Tu navegador no soporta el video.
                </video>
            </div>
            <!-- Columna del texto -->
            <div class="col-md-6 text-white text-center">
                <h1 class="card-title" style="font-size: 60px;"><strong>¡Envia ya!</strong></h1>
                <h3 class="card-text">Cuando vayas a viajar, te recomendamos que anticipes tu salida al menos 2 días antes.</h3>
                <a href="#" class="btn-custom">Reserva ahora</a>
            </div>
        </div>
    </div>
</div>

<div class="container-4">
    <h2>Conoce nuestros servicios <b>de paqueteria</b></h2>
    <i class="bi bi-box-seam"></i>
</div>






<!-- paqueteria -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center fondo-paquete">
            <div class="card-body3 d-flex justify-content-center align-items-center">
                <!-- Imagen centrada -->
                <img src="/img/Recursos-01.png" alt="Paquetería" class="img-fluid img-paqueteria">
            </div>
        </div>
        <div class="col-md-5 mt-6 mt-md-0">
            <center>
                <h1 class="card-title" style="font-size: 60px; color: #005eff;"><strong>¡Reserva ya!</strong></h1>
            </center>
            <h3 class="text-end flex-grow-1">¡No te preocupes! Tu paquete está seguro con nosotros.</h3>
            <br><br>
            <ul class="list-unstyled">
                <li class="d-flex align-items-center justify-content-between mb-3">
                    <h3 class="texto-azul text-end flex-grow-1">Servicio de <b>Lunes a Domingo</b></h3>&nbsp;
                    <div class="bg-icon me-3"><i class="icono bi bi-calendar-week text-white"></i></div>
                </li>
                <li class="d-flex align-items-center justify-content-between mb-3">
                    <h3 class="texto-azul text-end flex-grow-1">Entrega <b>confiable</b></h3>&nbsp;
                    <div class="bg-icon me-3"><i class="icono bi bi-shield-check text-white"></i></div>
                </li>
                <li class="d-flex align-items-center justify-content-between mb-3">
                    <h3 class="texto-azul text-end flex-grow-1">Rapidez</h3>&nbsp;
                    <div class="bg-icon me-3"><i class="icono bi bi-lightning-charge text-white"></i></div>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                    <h3 class="texto-azul text-end flex-grow-1">Precios <b>accesibles</b></h3>&nbsp;
                    <div class="bg-icon me-3"><i class="icono bi bi-currency-dollar text-white"></i></div>
                </li>
            </ul>
        </div>
    </div>
</div>



<!-- NUEVA SECCIÓN DESPUÉS DE PAQUETERÍA -->
<div class="container my-5" style="background: linear-gradient(to bottom, #f1f2f42b, #c7c7c71a); padding: 2rem; border-radius: 10px;">
    <div class="text-center mb-4">
        <h2><strong>¿Por qué elegirnos?</strong></h2>
    </div>
    <!-- Tres beneficios en columnas -->
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="p-4 h-100" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <i class="bi bi-clock-history display-4 text-primary mb-3"></i>
                <h4><strong>Puntualidad</strong></h4>
                <h3 style="font-size: 1.1rem;">Siempre salimos a tiempo para que llegues a tu destino sin contratiempos.</h3>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 h-100" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <i class="bi bi-shield-lock display-4 text-primary mb-3"></i>
                <h4><strong>Seguridad</strong></h4>
                <h3 style="font-size: 1.1rem;">Tu seguridad es nuestra prioridad. Vehículos revisados y conductores capacitados.</h3>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 h-100" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <i class="bi bi-star display-4 text-primary mb-3"></i>
                <h4><strong>Comodidad</strong></h4>
                <h3 style="font-size: 1.1rem;">Viaja en unidades limpias, cómodas y con excelente atención al cliente.</h3>
            </div>
        </div>
    </div>
</div>


@endsection