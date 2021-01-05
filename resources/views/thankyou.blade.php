@extends('layouts.app')
@section('content')

    <style>
        h1.ml8 {
            font-weight: 900;
            font-size: 4.5em;
            color: #fff;
            width: 3em;
            height: 3em;
        }

        .ml8 .letters-container {
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            top: 0;
            bottom: 0;
            height: 1em;
        }

        .ml8 .letters {
            position: relative;
            z-index: 2;
            display: inline-block;
            line-height: 0.7em;
            right: -0.12em;
            top: -0.2em;
        }

        .ml8 .bang {
            font-size: 1.4em;
            top: auto;
            left: -0.06em;
        }

        .ml8 .circle {
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            top: 0;
            bottom: 0;
        }

        .ml8 .circle-white {
            width: 3em;
            height: 3em;
            border: 2px dashed white;
            border-radius: 2em;
        }

        .ml8 .circle-dark {
            width: 2.2em;
            height: 2.2em;
            background-color: skyblue;
            border-radius: 3em;
            z-index: 1;
        }

        .img {
            height: 150px;
            width: 150px
        }

        .ml8 .circle-dark-dashed {
            border-radius: 2.4em;
            background-color: transparent;
            border: 2px dashed #4F7B86;
            width: 2.3em;
            height: 2.3em;
        }

        .letters-left,
        .bang {
            color: darkred
        }

    </style>


    <div class="container">
        <h1 class="ml8">
            <span class="letters-container">
                <span class="letters letters-left">Thank you for your Connection! Good Day</span>
                <span class="letters bang">!</span>
            </span>
            <span class="circle circle-white"></span>
            <span class="circle circle-dark"><img src="logo1.png" class="img"></span>
            <span class="circle circle-container"> <span class="circle circle-dark-dashed">
                </span></span>
        </h1>
    </div>
    <script>
        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml8 .circle-white',
                scale: [0, 3],
                opacity: [1, 0],
                easing: "easeInOutExpo",
                rotateZ: 360,
                duration: 1100
            }).add({
                targets: '.ml8 .circle-container',
                scale: [0, 1],
                duration: 1100,
                easing: "easeInOutExpo",
                offset: '-=1000'
            }).add({
                targets: '.ml8 .circle-dark',
                scale: [0, 1],
                duration: 1100,
                easing: "easeOutExpo",
                offset: '-=600'
            }).add({
                targets: '.ml8 .letters-left',
                scale: [0, 1],
                duration: 1200,
                offset: '-=550'
            }).add({
                targets: '.ml8 .bang',
                scale: [0, 1],
                rotateZ: [45, 15],
                duration: 1200,
                offset: '-=1000'
            }).add({
                targets: '.ml8',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1400
            });
        anime({
            targets: '.ml8 .circle-dark-dashed',
            rotateZ: 360,
            duration: 38000,
            easing: "linear",
            loop: true
        });

    </script>




@endSection
