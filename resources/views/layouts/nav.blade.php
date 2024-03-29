<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/images/escritorio.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- boostraps --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Ramon Aguilera</title>
</head>

<body>
    <div class="container nav d-flex justify-content-center col-sm-12 col-11">
        <nav  class="navbar navbar-expand-lg">
            <div>
                <li class="nav-item active">
                    <a class="nav-link" href="#sobremi">Sobre Mi</a>
                </li>
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Social</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#proyectosPrin">Proyectos Principales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#habilidades">Habilidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Experiencia">Experiencia </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Formacion">Formacion</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    


    @yield('content')
</body>

</html>
