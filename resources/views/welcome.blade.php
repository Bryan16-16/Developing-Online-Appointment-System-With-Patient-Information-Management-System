<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GREATEFUL BEGINNINGS MEDICAL</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ mix('resources/css/welcome.css') }}" rel="stylesheet">

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>


    <div id="app">



        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">


            {{-- <h5 class="logo me-auto"><a href="{{url('/')}}"></a>ONLINE APPOINTMENT SYSTEM WITH 
        PATIENT INFORMATION MANAGEMENT</h5> --}}

            <div class="container-fluid">



                <a class="imglogo" href="/">
                    <img class="imglogo" src="{{ mix('resources/img/logo.webp') }}" alt="logo"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">

                            {{-- font style navbar not fix to change to nunito --}}

                            <!-- <a style="font-weight: bold; color:#607ebd" class="nav-link active" aria-current="page"
                                href="#home">Home</a> -->

                        </li>
                        <li class="nav-item">
                            <a style="font-weight: bold; color:#607ebd;" class="nav-link" href="#service">Services</a>
                        </li>

                        <li class="nav-item">
                            <a style="font-weight: bold; color:#607ebd;" class="nav-link" href="#location">Location</a>
                        </li>

                        <li class="nav-item">
                            <a style="font-weight: bold; color:#607ebd;" class="nav-link" href="#about">About us</a>
                        </li>
                </div>

                {{-- old position of button hamburger menu below --}}


                {{-- login register code below --}}
                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a style=" font-weight: bold; color: #607EBD;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style=" font-weight: bold; color: #607EBD;" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a style="color: #607EBD;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }}
                                    {{ Auth::user()->lname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div> --}}



            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>

        <div id="home" class="container-md">
            <h1><strong>Grateful Beginnings Medical</strong></h1>
            <h5 class="h4text">Dental, Lying-in, and Pediatrician Clinic</h5>


            <br>
            <br>

            <a href="{{ route('login') }}">
                <button
                    style=" -webkit-filter: drop-shadow(1px 2px 2px rgb(133, 131, 131));
    filter: drop-shadow(2px 2px 2px rgb(133, 133, 133));"
                    type="button" class="btn btn-primary"> <span data-feather="calendar"
                        class="size-10 align-text-bottom"></span> Book an appointment
                    </button></a>

            <br><br><br>
   

            <br><br>
            <br><br>
            <br><br>
            
            <br><br>
            <br><br>
            <br><br>

            <h3 id="service"><strong>Services</strong></h3>

<h6>Dental</h6>
<h6>Lying-in</h6>
<h6>Pediatrician Clinic</h6>
           
            <br><br>
            <h3 id="location"><strong>location</strong></h3>
            <div class="ratio" style="--bs-aspect-ratio: 30%;">
                <iframe
                    src="https://maps.google.com/maps?q=Grateful%20Beginnings%20Medical,%20Pediatric,%20Dental%20and%20Lying%20in%20Clinic,%20Calamba,%204027%20Laguna&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    title="Maps"></iframe>
            </div>


            <br><br>
            <h3 id="about"><strong>About us</strong></h3>

            <br><br><br>


        </div>



        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
                <span style="color:white;" class="mb-3 mb-md-0">&copy; 2022 Company, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">

                <li class="ms-3"><a class="text-muted" href="#"><span style="color:white;"
                            data-feather="facebook" class="align-text-bottom"></span></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><span style="color:white;"
                            data-feather="instagram" class="align-text-bottom"></span></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24"
                            height="24">
                            <use xlink:href="#twitter" />
                        </svg></a></li>
            </ul>
        </footer>
</body>
<script type="text/javascript" src="{{ mix('resources/js/app.js') }}"></script>
<script>
    feather.replace();
</script>

</html>
