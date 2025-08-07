@extends('layouts.main')

@section('contenido')
<div class="container-11">
    <div class="container">
        <br>
        <h4 class="subtitulo">Sobre nosotros</h4>
        <h1 class="card-title2"><strong>Somos una Agencia de viajes</strong></h1>
        <br>
        <h3 class="enfoque">
            Nos enfocamos en dar la mejor experiencia a nuestros clientes que viajan con nosotros, esforzándonos cada día en brindar un servicio, cómodo, rápido y seguro.
        </h3>
        <br>
        <br>

    </div>
</div>
<div class="container container-bg my-5">
    <div class="vision">
        <div class="row text-center">
            <div class="col-md-6 mb-4">
                <div class="card-custom">
                    <i class="bi bi-speedometer display-4 text-primary mb-3"></i>
                    <h4><strong>Nuestra visión</strong></h4>
                    <h3 style="color: #375160;">
                        Convertirnos en la agencia turística líder en la región,
                        reconocida por nuestra excelente operatividad, innovación
                        tecnológica y un servicio al cliente inigualable. Aspirando
                        a expandir nuestras rutas y ser la primera opción para quienes
                        buscan viajes eficientes y confiables en México.
                    </h3>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card-custom">
                    <i class="bi bi-rocket-takeoff display-4 text-primary mb-3"></i>
                    <h4><strong>Nuestra misión</strong></h4>
                    <h3 style="color: #375160;">
                        Nuestro compromiso es brindar experiencias de viaje excepcionales que se
                        adapten a las necesidades de cada usuario, principalmente
                        priorizando la seguridad, la confianza y la satisfacción en cada trayecto.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Imagen fuera del container anterior -->
<div class="container my-5">
    <div class="spriner text-center">
        <img src="/img/sprinter.png" alt="Unidades Equipadas" class="img-rounded img-fluid">
    </div>
</div>

<style>
    

    .card-custom {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        height: 100%;
    }

    .vision h3 {
        font-size: 1.2rem;
    }
</style>