@extends('layouts.app')
@section('content')
    <!-- <main>

        <section class="ft-main">
            <div class="ft-main-item">
                <p><strong>One-stop Cloud-based<br>solutions for Academic<br>institutes management<br> and
                        collaboration<strong></p>
            </div>
            <div class="ft-main-item">

            </div>
    </main> -->







<div class="responsive-box box-1"><p class="header-para1"><strong>One-stop Cloud-based<br>solutions for Academic<br>institutes management<br> and
                        collaboration<strong></p> </div>
<!--  <div class="par-1"> </div>
<div class="par-2"> </div>
<div class="par-3"> </div> -->

<div class="responsive-box box-2"> </div>


<div class="responsive-box box-3"><p class="header-para2"><strong>We are hiring Developers</br>and DevOps,to join us</br><a href="#" class="header-para2-a">Apply here.<strong></a><p> </div>

<div class="responsive-box box-5 ">

</div>



<div class="responsive-box box-1"> </div>


    <style>
        .header-para1{


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

body {
    margin:0;padding:0;
	background-color:none;
}

.responsive-box {

	background-color: none;
	margin: 2%;
    float: left;

}
/* .header-rectangle{
margin:1rem 0;
background-image: linear-gradient(to  bottom left, rgba(13, 219, 254, 1), rgba(237, 14, 248, 1));

border: 1px solid black;
width: 60%;
height: 60%;
position: absolute;
left:0%;
border-radius:20%;


} */


.box-1 {
    background-color: cyan;
    display:flex;
    justify-content:center;
    position: relative;
    /* background-image: linear-gradient(to right , rgba(255,255,255,0.5),rgba(40, 180, 133, 0.5)), url({{ asset('/images/logo1.png') }}); */

    /* background-size: cover;
  background-position: center;   */


	width: 94%;
    height: 50%;
}


.box-2, .box-3, .box-4 {
    background-color: cyan;
	width: 29.333%;
	height: 140px;
}
.box-3{
    background-color: white;
    display:flex;
    justify-content:center;
    position: relative;
    /* background-image: linear-gradient(to right , rgba(255,255,255,0.5),rgba(40, 180, 133, 0.5)), url({{ asset('/images/logo1.png') }});

    background-size: cover;
  background-position: center;   */

}
.header-para2{
    font-size:2rem;



}
.header-para2-a:hover{

    cursor: pointer;
    text-shadow: 0.5rem 1rem 2rem rgba(248, 3, 207, 0.2);

}


.box-5 {
    Background-color: #757BFB;
	width: 62.666%;
	height: 492px;
}



/* .par-1, .par-2, .par-3 {
	width: 70%;
	margin: 1% 2%;
	background-color: #888;
	height: 16px;
	float: left;
} */

/* .par-2 {
	width: 56%;
}

.par-3 {
	width: 64%;
} */
    </style>

@endsection
