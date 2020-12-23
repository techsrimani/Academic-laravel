<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Academicconnect') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <script src="https://kit.fontawesome.com/981794e91c.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div class="fade-in">
                        <img src="{{ asset('/images/academic-logo.webp') }}">
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('/') }}/careers">Careers</a>
                        </li>

                        @guest

                        @else
                            <li class="nav-item dropdown">

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact-requests') }}">Contact Submissions</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('job-applications') }}">job Submissions</a>
                            </li>

                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer>
        <!-- Footer main -->
        <section class="ft-main">
            <div class="ft-main-item">
                <h2 class="ft-title"><i class="fa fa-map-marker" aria-hidden="true"> Academic Connect</i></h2>
                <h6>91 Springboard Business Hub,</h6>
                <h6>3rd Floor, No.175 & 176,</h6>
                <h6>Dollars Colony,</h6>
                <h6>Jp Nagar 4th phase,</h6>
                <h6>Bannerghatta Main Road</h6>
                <h6>Bengaluru,Karnataka,India-560076</h6>
            </div>
            <div class="ft-main-item">
                <h2 class="ft-title">Company</h2>
                <ul>
                    <li><a href="#" class="ft-anchor-element">About-Us</a></li>
                    <li><a href="#" class="ft-anchor-element">Join Academic Connect</a></li>
                    <li><a href="#" class="ft-anchor-element">Contact-us</a></li>
                    <li><a href="#" class="ft-anchor-element">Gallery</a></li>
                    <li><a href="#" class="ft-anchor-element"><i class="far fa-envelope"> info@acdemicconnect.in</a></i>
                    </li>
                </ul>
            </div>
            <div class="ft-main-item">
                <h2 class="ft-title"><i class="fa fa-map-marker" aria-hidden="true"> SaaS Division of<br>Shreshta
                        services</i></h2>
                <h6>No.5,1st cross</h6>
                <h6>Chunchagatta Main Road,</h6>
                <h6>Near K.C Circle,</h6>
                <h6>Jp Nagar 4th phase,</h6>
                <h6>Konankunte Post</h6>
                <h6>Bengaluru,Karnataka,India-560076</h6>
            </div>
        </section>
        <!-- Footer social -->
        <section class="ft-social">
            <ul class="ft-social-list">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-github"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </section>
        <!-- Footer legal -->
        <section class="ft-legal">
            <!-- <li><a href="#">Terms &amp; Conditions</a></li> -->
            <!-- <li><a href="#">Privacy Policy</a></li> -->
            <h6 class="ft-legal-list">&copy; 2020 Copyright Shreshta services Pvt ltd.</h6>
        </section>
    </footer>
    <script>
        $(document).ready(function() {
            $('.hamburger-shell').click(function() {
                $('#menu').slideToggle(300);
                $('.top').toggleClass('rotate');
                $('.middle').toggleClass('rotate-back');
                $('.menu-name').toggleClass('bump');
                $('.bg-cover').toggleClass('reveal');
            });
            $('.bg-cover').click(function() {
                $('#menu').slideToggle(300);
                $('.top').toggleClass('rotate');
                $('.middle').toggleClass('rotate-back');
                $('.menu-name').toggleClass('bump');
                $('.bg-cover').toggleClass('reveal');
            })
        });

    </script>
</body>


</html>
