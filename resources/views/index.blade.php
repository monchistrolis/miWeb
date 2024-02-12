@extends('layouts.nav')
@section('content')
    <div class="imgPerfilContainer col-lg-4 col-md-5 col-sm-12 col-12   container d-flex justify-content-center">
        <img class="imgPerfil col-lg-4 col-md-6 col-sm-5 col-5" src="/images/fotoPerfil.webp" alt="fotoPerfil">
    </div>
    {{-- presentacion --}}
    <div class="container presentacion col-lg-5 " id="sobremi">
        <div class="sobreMi">
            <h2 style="color: white"> Ramon Aguilera!</h2>
            <p>
                ¡Hola! Soy desarrollador de Front-End. Mi pasión es crear experiencias web excepcionales.
            </p>
        </div>
    </div>
    {{-- correo --}}
    <div class="container col-lg-5 col-md-12 col-sm-12 col-12" id="social">
        <div class="row">
            <div class="email col-lg-6 col-md-6 ">
                <input id="emailInput" class="emailIn col-8 col-sm-10 col-md-12 col-lg-12" type="text"
                    placeholder="ramondeveloper96@gmail.com">
            </div>


            <div class="btnOpciones d-flex justify-content-center mt-2 col-lg-6 col-md-6">
                <button class="btnOp col-lg-12 col-md-12 col-sm-10 col-8" id="copyButton">Copiar Correo</button>

                <span id="copyMessage"></span> <!-- Mensaje para mostrar el correo copiado -->
            </div>
        </div>
        {{-- lik de git y linkedin --}}
        <div class="container col-md-12">
            <div class="row  d-flex justify-content-around">
                <div class="btngit mt-3 col-lg-5 col-md-5 col-sm-8 col-8">
                    <h4 style="color: black">
                        <img class="git" src="/images/github.png" alt="">
                        <a style="text-decoration: none; color:black" href="https://github.com/monchistrolis"
                            target="_blank">
                            Github
                        </a>
                    </h4>
                </div>
                <div class=" btngit mt-3 col-lg-5 col-md-5 col-sm-8 col-8">
                    <h4 style="color: black">
                        <img class="linke" src="/images/linkedin.png" alt="">
                        <a style="text-decoration: none; color:black"
                            href="https://www.linkedin.com/in/ramon-andres-aguilera-sandoval-83a7b0bb/"
                            target="_blank">Linkedin
                        </a>
                    </h4>

                </div>
            </div>
        </div>
    </div>
    {{-- cv --}}

    <div class="container col-lg-5   mt-5">
        <div class="row">
            <h3 class="tituloCv"> Mi Curriculum Vitae</h3>
            <div class="d-flex justify-content-center">
                <a class="btnDescarga col-lg-6 col-md-6 col-sm-10 col-10" href="/descargas/Curriculum.pdf"
                    download="Cv.pdf">Descargar CV</a>
            </div>
        </div>
    </div>
    {{-- proyectos --}}
    <div class="container mt-5 col-lg-5">
        <div class="row">
            <div class="titulo">
                <h3> <img class="imgProyecto" src="/images/estrella.webp" alt="estella"> Mis Proyectos</h3>
            </div>
            <div id="proyectosPrin" class="Proyectos col-lg-12 col-md-10 col-10">
                <div class="tituloProyecto mt-5">
                    <h3>
                        Jetell
                    </h3>
                </div>
                <div class="descricion">
                    <p>
                        Somos tu plataforma para acercarte al Evangelio. En Jetell, ofrecemos recursos y contenido para
                        todos aquellos que desean explorar la fe y encontrar inspiración espiritual.
                    <div class="d-flex justify-content-end">
                        <a class="link" href="https://jetell.cl" target="_blank">https://jetell.cl/</a>
                    </div>
                    </p>
                </div>
                <div class="d-flex justify-content-center">
                    <img class="imagen" src="/images/inicio.webp" alt="imgweb">
                </div>
            </div>
            <hr class="mt-5">
            <div id="proyectosPrin" class="Proyectos  col-lg-12 col-md-10 col-10">
                <div class="tituloProyecto">
                    <h3>
                        Camilanitas
                    </h3>
                </div>
                <div class="descricion">
                    <p>
                        plataforma para los apacionados del amigurumi. camilanitas, ofrece una gran variedad
                        de productos de peluches alfombras, flores , ect y todo hecho a mano.
                    <div class="d-flex justify-content-end">
                        <a class="link1" href="https://camilanitas.com/" target="_blank">https://camilanitas.com//</a>
                    </div>
                    </p>
                </div>
                <div class="d-flex justify-content-center">
                    <img class="imagen" src="/images/portada1.webp" alt="imgweb">
                </div>
            </div>
        </div>
    </div>
    {{-- habilidades --}}
    <div class="container mt-5 mb-5 col-lg-5 col-md-12 col-12 col-sm-12" id="habilidades">
        <h2>
            Habilidades Tecnicas
        </h2>
        <div class="row d-flex justify-content-center">
            <div class="html col-lg-3 col-md-4 col-6 col-sm-6">
                <div class="conlogo d-flex justify-content-center">
                    <img class="logo" src="/images/html.png" alt="html">
                </div>
                <div class="d-flex justify-content-center">
                    <h5>
                        HTML
                    </h5>
                </div>
                <div class="progreso html-bar" style="--wth:60%"></div>
            </div>

            <div class="css col-lg-3 col-md-4 col-6 col-sm-6">
                <div class="conlogo d-flex justify-content-center">
                    <img class="logo" src="/images/css.png" alt="css">
                </div>
                <div class="d-flex justify-content-center">
                    <h5>
                        CSS
                    </h5>
                </div>
                <div class="progreso css-bar" style="--wth:40%"></div>
            </div>

            <div class="js col-lg-3 col-md-4 col-6 col-sm-6">
                <div class="conlogo d-flex justify-content-center">
                    <img class="logo" src="/images/js.gif" alt="js">
                </div>
                <div class="d-flex justify-content-center">
                    <h5>
                        javaScrips
                    </h5>
                </div>
                <div class="progreso js-bar" style="--wth:10%"></div>
            </div>

            <div class="sql col-lg-3 col-md-4 col-6 col-sm-6">
                <div class="conlogo d-flex justify-content-center">
                    <img class="logo" src="/images/sql.png" alt="sql">
                </div>
                <div class="d-flex justify-content-center">
                    <h5>
                        SQL
                    </h5>
                </div>
                <div class="progreso sql-bar" style="--wth:30%"></div>
                {{-- <p>En Progreso</p> --}}
            </div>

            <div class="laravel col-lg-3 col-md-4 col-6 col-sm-6">
                <div class="conlogo d-flex justify-content-center">
                    <img class="logo" src="/images/laravel.png" alt="laravel">
                </div>
                <div class="d-flex justify-content-center">
                    <h5 class="text-center">
                        Fremeware Laravel
                    </h5>
                </div>
                <div class="progreso laravel-bar" style="--wth:50%"></div>
            </div>

            <div class="android col-lg-3 col-md-4 col-6 col-sm-6">
                <div class="conlogo d-flex justify-content-center">
                    <img class="logo" src="/images/android.png" alt="android">
                </div>
                <div class="d-flex justify-content-center">
                    <h5 class="text-center">
                        Android Studio
                    </h5>
                </div>
                <div class="progreso android-bar" style="--wth:40%"></div>
            </div>
        </div>
    </div>
    {{-- experiencia --}}
    <div class="container col-lg-5 mb-3" id="Experiencia">
        <div class="row">
            <div class="tituloEx">
                <h2>
                    Experencia Laboral
                </h2>
            </div>
            <div class="mt-3">
                 <h5>
                    Practica Profesional en startup "DevLet Spa"
                 </h5>
                 <p>
                    al momento de empezar la practica me designaron como lider de Back-End  y las tareas Principales que realice en esta practica fueron:
                    <li>
                        encriptacion y decencriptacion de datos, tales como nombre de los usuarios , correos,numeros telefonico,direcciones,ect.
                    </li>
                    <li>
                        agregar funciones para asi dar soporte a las gente de FrontEnd.
                    </li>
                    <li>
                        busqueda de error en la pagina
                    </li>
                 </p>
            </div>


        </div>
    </div>
    {{-- Formacion --}}
    <div class="container col-lg-5 mb-5" id="Formacion">
        <div class="row">
            <div class="formacion">
                <h2>
                    Formacion Academica
                </h2>
                <h5>
                    Intitulo Profecional Inacap ,sede Santiago Centro (Santiago de Chile)
                </h5>

            </div>
        </div>
    </div>
@endsection
