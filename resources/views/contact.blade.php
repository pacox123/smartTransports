@extends('layouts.main')

@section('contenido')
<div class="container-11">
    <div class="container">
        <br>
        <h4 class="subtitulo">CONTÁCTANOS</h4>
        <h1 class="card-title2"><strong>Visítanos en alguna de nuestras sucursales</strong></h1>
        <br>
        <h3 class="enfoque">
            Puedes entrar al mapa, o escribir directamente a la dirección en el mapa de alguno de tus dispositivos </h3>
        <br>
        <br>

    </div>
</div>


<div class="container">
    <div class="row mapas"> <!-- Agregamos la clase .row aquí -->
        <div class="col-md-6 mb-4">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d1931314.3970084717!2d-98.8604736!3d19.0153838!3m2!1i1024!2i768!4f13.1!2m1!1ssmart%20transports%20mexico!5e0!3m2!1ses-419!2smx!4v1745425797289!5m2!1ses-419!2smx"
                width="100%"
                height="450"
                style="border:0; border-radius: 50px;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="col-md-6 mb-4">
            <div class="map-card p-3 mb-4 rounded">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-geo-alt-fill text-primary fs-4 me-2"></i>
                    <h5 class="mb-0 fw-bold">Tehuacán</h5>
                </div>
                <p class="text-muted mb-3">
                    Calle 2 Ote 131, Centro de la Ciudad,<br>
                    75700 Tehuacán, Pue.
                </p>
                <a href="https://wa.me/522381790696" target="_blank" class="btn btn-primary d-inline-flex align-items-center">
                    <i class="bi bi-whatsapp me-1"></i> Reservar aquí
                </a>
            </div>

            <div class="map-card p-3 mb-4 rounded">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-geo-alt-fill text-primary fs-4 me-2"></i>
                    <h5 class="mb-0 fw-bold">Puebla</h5>
                </div>
                <p class="text-muted mb-3">
                    Blvrd Nte 3625, Las Cuartillas,<br>
                    72044 Heroica Puebla de Zaragoza, Pue.
                </p>
                <a href="https://wa.me/522222763415" target="_blank" class="btn btn-primary d-inline-flex align-items-center">
                    <i class="bi bi-whatsapp me-1"></i> Reservar aquí
                </a>
            </div>

            <div class="map-card p-3 rounded">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-geo-alt-fill text-primary fs-4 me-2"></i>
                    <h5 class="mb-0 fw-bold">Ciudad de México</h5>
                </div>
                <p class="text-muted mb-3">
                    Av. 4 2, Ignacio Zaragoza, Venustiano Carranza,<br>
                    15000 Ciudad de México, CDMX
                </p>
                <a href="https://wa.me/525565017256" target="_blank" class="btn btn-primary d-inline-flex align-items-center">
                    <i class="bi bi-whatsapp me-1"></i> Reservar aquí
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .map-card {
        background-color: white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);

    }

    .mapas iframe {
        border-radius: 20px;
    }

    .bi-whatsapp {
        color: #25D366;
        /* Color verde oficial de WhatsApp */
    }
    
</style>