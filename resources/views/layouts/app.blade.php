<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<<<<<<< Updated upstream
=======
    
>>>>>>> Stashed changes
    <script src="https://kit.fontawesome.com/981794e91c.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .reveal {
	opacity: .85;
	display: block;
	pointer-events: auto;
	visibility: visible;
}

.hamburger-shell {
	margin: 0;
	position: fixed;
	overflow: hidden;
	width: 70px;
	height: 100px;
	overflow: auto;
	left: calc(100% - 100px);
	top: 20px;
	cursor: pointer;
}

.top, .middle{
	position: absolute;
	width: 62px;
	height: 10px;
    background-color: lightgrey;
	transition: all 350ms ease-in-out;
	top: 20px;
}

.middle {
	top: 40px;
}

#menu {
	position: fixed;
	left: calc(100% - 290px);
	top: 10px;
	color: black;
	display: none;
	margin: 120px 30px;
	text-decoration: none;
	font-family: Arial, sans-serif;
	font-weight: 100;
	font-size: 20px;
	text-transform: uppercase;
	color: #333;
	padding: 24px;
	width: 200px;
	text-align: right;
}


#menu a li {
	text-decoration: none!important;
	padding-bottom: 10px;
	margin-bottom: 12px;
	border-bottom: 1px solid black;
	list-style: none;
	color: #555;
	transition: all 150ms ease;
}

#menu a li:hover {
	color: #00abff;
	padding-right: 3px;
}

#menu a li:hover:after {
}



#menu a {
	text-decoration: none;
}
.rotate {
	transform: rotate(225deg);
	-webkit-transform: rotate(225deg);
	top: 30px;
	background-color: red;
	height: 2px;
}
.bg-cover {
	position: fixed;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background-color: tomato;
	z-index: 0;
	transition: all 350ms ease;
	opacity: 0;
	visibility: hidden;
	pointer-events: none;
}

.rotate-back {
	transform: rotate(-225deg);
	-webkit-transform: rotate(-225deg);
	top: 30px;
	background-color: red;
	height: 2px;
}

.top {
-webkit-animation-delay: 100ms;
}

.middle {
-webkit-animation-delay: 250ms;
}

.bottom {
	-webkit-animation-delay: 400ms;
}

.menu-name {
	font-family: Verdana;
	font-weight: 900;
	color: black;
	font-size: 19.5px;
	text-decoration: none;
	position: absolute;
	top: 56px;
	left: -1px;
	transition: all 350ms;
}

.bump {
	top: 64px;
	color: red;
}
        </style>
</head>

<body>
    <div id="app">
   

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <div class="panel-body">
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
                    
                    <div class="bg-cover"></div>
                    <a class="hamburger-shell">
	<div class="hamb top"></div>
		<div class="hamb middle"></div>
	<div class="menu-name"></div>

<ul id="menu">
		<a href="#"> <li>Home</li></a>
		
		<a href="#"> <li>About Us</li></a>
		<a href="#"> <li>Career</li></a>
		<a href="#"> <li>Contact</li></a>
</ul>
</a>	
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                        </li>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact-requests') }}">Contact Submissions</a>
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
<<<<<<< Updated upstream

=======
    <script>
        $(document).ready(function(){
	$('.hamburger-shell').click(function(){
		$('#menu').slideToggle(300);
		$('.top').toggleClass('rotate');
		$('.middle').toggleClass('rotate-back');
		$('.menu-name').toggleClass('bump');
		$('.bg-cover').toggleClass('reveal');
	});
	$('.bg-cover').click(function(){
		$('#menu').slideToggle(300);
		$('.top').toggleClass('rotate');
		$('.middle').toggleClass('rotate-back');
		$('.menu-name').toggleClass('bump');
		$('.bg-cover').toggleClass('reveal');
	})
});
    </script>
>>>>>>> Stashed changes
</body>


</html>
