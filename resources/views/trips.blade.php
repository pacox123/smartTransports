@extends('layouts.main')

@section('contenido')
<div class="container-11">
    <div class="container">
        <br>
        <h4 class="subtitulo">NUESTROS VIAJES</h4>
        <h1 class="card-title2"><strong>¡Viaja a Puebla, CDMX, Cuacnopalan o Tehuacán!</strong></h1>
        <br>
        <h3 class="enfoque">
            Precios accesibles, instalaciones equipadas, unidades seguras y confiables <br> ¡Te esperamos!</h3>
        <br>
        <br>

    </div>
</div>


<div class="container s">
    <div class="viajes2">
        <center>
            <div class="row justify-content-center">

                <!-- Tarjeta 1 -->
                <!-- Tarjeta con clase personalizada -->
                <div class="col-md-4">
                    <div class="card card-ruta text-center">
                        <img src="/img/teh.png" width="100" height="250" class="card-img-top" alt="Tehuacán a Puebla">

                        <div class="card-body">
                            <h5 class="card-title" style="color: #375160;"><strong>Tehuacán a Puebla</strong></h5>
                            <h6 style="color: #375160;">Puebla a Tehuacán</h6>
                            <p class="card-text" style="margin-top: -10px;">$105.00 MXN</p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#info1" aria-expanded="false" aria-controls="info1">
                                Información
                            </button>
                            <div class="collapse mt-3" id="info1">
                                <div class="card card-body" style="background-color: #8b8b8b0f;">
                                    <p><strong><i class="bi bi-alarm"></i> Salidas:</strong> cada 20 minutos (agenda al menos 2 días antes)</p>
                                    <p><strong><i class="bi bi-geo-alt-fill"></i> Ubicación Puebla:</strong> Blvrd Nte 3625, Las Cuartillas, 72044 Heroica Puebla de Zaragoza, Pue.</p>
                                    <p><strong><i class="bi bi-geo-alt-fill"></i> Ubicación tehuacan:</strong> Calle 2 Ote 131, Centro de la Ciudad, 75700 Tehuacán, Pue.</p>
                                    <p><strong>Pulsa en estos botones para ver la ubicación en Google Maps</strong></p>
                                    <a href="https://maps.app.goo.gl/ZbU41meW7woQQDZM9" class="btn btn-primary btn-sm ml-auto"><i class="bi bi-geo-alt-fill"></i> Tehuacán</a>
                                    <br>
                                    <a href="https://maps.app.goo.gl/nyFGnoi18eJvpafz8" class="btn btn-primary btn-sm ml-auto"><i class="bi bi-geo-alt-fill"></i> Puebla</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-ruta text-center">
                        <img src="/img/PUE.jpg" width="100" height="250" class="card-img-top" alt="Puebla">

                        <div class="card-body">
                            <h5 class="card-title" style="color: #375160;"><strong>Tehuacán a CDMX</strong></h5>
                            <h6>CDMX a Tehuacán</h6>
                            <p class="card-text" style="color: #375160; margin-top: -10px;">$300.00 MXN</p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#info2" aria-expanded="false" aria-controls="info2">
                                Información
                            </button>
                            <div class="collapse mt-3" id="info2">
                                <div class="card card-body" style="background-color: #8b8b8b0f;">
                                    <p><strong><i class="bi bi-alarm"></i> Salidas:</strong> TEH-CDMX: 3:00 AM a 18:00 PM
                                        <br>
                                        CDMX-TEH: 4:00 AM a 20:OO PM
                                    </p>
                                    <p><strong><i class="bi bi-geo-alt-fill"></i> Ubicación CDMX:</strong> Av. 4 2, Ignacio Zaragoza, Venustiano Carranza, 15000 Ciudad de México, CDMX</p>
                                    <p><strong><i class="bi bi-geo-alt-fill"></i> Ubicación tehuacan:</strong> Calle 2 Ote 131, Centro de la Ciudad, 75700 Tehuacán, Pue.</p>
                                    <p><strong>Pulsa en estos botones para ver la ubicación en Google Maps</strong></p>
                                    <a href="https://maps.app.goo.gl/ZbU41meW7woQQDZM9" class="btn btn-primary btn-sm ml-auto"><i class="bi bi-geo-alt-fill"></i> Tehuacán</a>
                                    <br>
                                    <a href="https://maps.app.goo.gl/vjZU16tRPDL8eEgU8" class="btn btn-primary btn-sm ml-auto"><i class="bi bi-geo-alt-fill"></i> CDMX</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-ruta text-center">
                        <img src="/img/mx.jpg" width="100" height="250" class="card-img-top" alt="CDMX">


                        <div class="card-body">
                            <h5 class="card-title" style="color: #375160;"><strong>Cuacnopalan a CDMX</strong></h5>
                            <h6 style="color: #375160;">CDMX a Cuacnopalan</h6>
                            <p class="card-text" style="color: #375160; margin-top: -10px;">$200.00 MXN</p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#info3" aria-expanded="false" aria-controls="info3">
                                Información
                            </button>
                            <div class="collapse mt-3" id="info3">
                                <div class="card card-body" style="background-color: #8b8b8b0f;">
                                    <p><strong><i class="bi bi-alarm"></i> Salidas:</strong> CUAC-CDMX: 3:45 AM a 18:45 PM
                                    CUAC-CDMX: 4:00 AM a 20:OO PM</p>
                                    <p><strong><i class="bi bi-geo-alt-fill"></i> Ubicación Cuacnopalan:</strong> BC. 6 Pte. 907, San Fabián, 75515 Cuacnopalan, Pue.</p>
                                    <p><strong><i class="bi bi-geo-alt-fill"></i> Ubicación CDMX:</strong> Av. 4 2, Ignacio Zaragoza, Venustiano Carranza, 15000 Ciudad de México, CDMX</p>
                                    <p><strong>Pulsa en estos botones para ver la ubicación en Google Maps</strong></p>
                                    <a href="https://maps.app.goo.gl/Z8YY3Dp9dqH8qN9cA" class="btn btn-primary btn-sm ml-auto"><i class="bi bi-geo-alt-fill"></i> Cuacnopalan</a>
                                    <br>
                                    <a href="https://maps.app.goo.gl/vjZU16tRPDL8eEgU8" class="btn btn-primary btn-sm ml-auto"><i class="bi bi-geo-alt-fill"></i> CDMX</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Puedes repetir el bloque de tarjeta para las otras rutas -->

            </div>
        </center>
    </div>
</div>

<br>
<br>


@endsection


@push('scripts')
<script>
    function toggleInfo(id) {
        const info = document.getElementById(id);
        info.style.display = info.style.display === 'none' ? 'block' : 'none';
    }
</script>
<script>
    function toggleInfo(id) {
        const info2 = document.getElementById(id);
        info.style.display = info.style.display === 'none' ? 'block' : 'none';
    }
</script>
<script>
    function toggleInfo(id) {
        const info3 = document.getElementById(id);
        info.style.display = info.style.display === 'none' ? 'block' : 'none';
    }
</script>
@endpush

<style>
    .card-ruta {
        position: static;
        max-width: 100%;
        box-shadow: none;
        transition: none;
    }

    .card-ruta .card-body {
        position: static;
        transform: none;
        opacity: 1;
        transition: none;
    }

    .card-ruta:hover .card-body {
        opacity: 1;
    }

    .card-ruta:hover .card-img-top {
        transform: none;
        filter: none;
    }

    .viajes2,
    p {
        font-family: 'Poppins', sans-serif;
        color: #5b5b5b;
    }
</style>