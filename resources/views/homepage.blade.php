@extends('layouts.app')
@section('content')
    <section class="container header-main">
        <header class="for-para-1">
            <div class="row ">
                <div class="col-md-6 ">
                    <h1 class="header-para1 fade-in"><strong>One-stop Cloud-based solutions for Academic institutes
                            management<br> and
                            collaboration.<strong></h1>
                </div>
                <div class="col-md-12 md-5 p-5">
                    <div class="fetch-letter">
                        <p style="font-size:40px"></p>
                    </div>
                </div>
        </header>
        <div class="row ">
            <div class="col-md-6">
                <img src="{{ asset('/images/mobile4.png') }}" class="img-b">
            </div>
            <div class="col-md-6 para-2">
                <h1 class="header-para2 fade-in"><strong>We are hiring developers and DevOps,to join us</br><a
                            href="{{ url('/careers') }}">Apply here</a></strong>
                </h1>
            </div>
        </div>
        </div>
        <script>
            const message = 'Launching Soon';
            const typingPromises = (message, timeout) => [...message].map(
                (ch, i) =>
                new Promise(resolve => {
                    setTimeout(() => {
                        resolve(message.substring(0, i + 1));
                    }, timeout * i);
                })
            );
            typingPromises(message, 140).forEach(promise => {
                promise.then(portion => {
                    document.querySelector('p').innerHTML = portion;
                });
            });

        </script>
    </section>
    <style>

        .img-b {
            width: 100%;
            max-width: 300px;
            display: inline-block;
        }

        @media only screen and (max-width: 600px) {
            .header-main {
                text-align: center;
            }
        }

        @media only screen and (min-width: 1200px) {
            .img-b {
                transform: rotate(45deg);
            }
        }

    </style>
@endsection
