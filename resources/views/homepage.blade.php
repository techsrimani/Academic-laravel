@extends('layouts.app')
@section('content')
    <main>
        <!-- Footer main -->
        <section class="ft-main">
            <div class="ft-main-item">
                <p><strong>One-stop Cloud-based<br>solutions for Academic<br>institutes management<br> and
                        collaboration<strong></p>
            </div>
            <div class="ft-main-item">

            </div>
    </main>

    <style>
        p {
            font-size: 3rem;
            font-weight: 900;
            line-height: 1.3;
            animation: moveInLeft 1s ease-out;
        }

        @keyframes moveInLeft {
            0% {
                opacity: 0;
                transform: translateX(-10rem);
            }

            80% {
                transform: translateX(1rem);
            }

            100% {
                opacity: 1;
                transform: translate(0);
            }
        }


    </style>
@endsection
