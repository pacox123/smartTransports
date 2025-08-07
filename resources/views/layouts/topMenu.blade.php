<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img id="logo" src="/img/Recursos-09.png" width="80" height="60">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('us')}}">Quiénes somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('trips')}}">Viajes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contactos</a>
                </li>
            </ul>
            <div class="d-flex ms-lg-3 mt-3 mt-lg-0">
                <button type="button" style="font-size: 22px;" class="btn btn-primary">Reservar</button>
            </div>
        </div>
    </div>
</nav>

<!-- Ajusta el contenido con un margen superior -->
<style>
    body {
        padding-top: 80px; /* ajusta esto a la altura real de tu navbar */
    }

    .navbar-nav .nav-link {
        margin: 0 15px;
        font-size: 22px;
    }

    @media (max-width: 768px) {
        .navbar-nav {
            align-items: center;
        }

        .navbar-nav .nav-link {
            font-size: 16px;
            margin: 8px 0;
        }

        .btn {
            width: 100%;
        }
    }
</style>
