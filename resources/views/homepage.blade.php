@extends('layouts.app')
@section('content')
<section class="container">
<header class="for-para-1">
<div class="row " >
    <div class="col-md-6 ">
        <h1 class="header-para1 fade-in"><strong>One-stop Cloud-based solutions for Academic institutes management<br> and
            collaboration<strong></h1>
    </div>
  </div>
  </header>
  <div class="row ">
    <div class="col-md-6 ">
    <img src="{{ asset('/images/mobile4.png') }}" class="img-b">
    </div>
    <div class="col-md-6 para-2">
        <h1 class="header-para1 fade-in"><strong>We are Hiring Developers and DevOps,to join us</br><a href="#">Apply here</a></strong>
            </h1>
    </div>
    </div>
  </div>
</section>
  <style>
      .img-b{
          width: 100%;max-width:300px;
          display:inline-block;
      }
      body{
        background-color: #FFFFFF;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 1500'%3E%3Cdefs%3E%3Cpath fill='none' stroke-width='63.5' stroke-opacity='0.7' id='a' d='M0-478l-413.96 717h827.92L0-478l-413.96 717h827.92z'/%3E%3C/defs%3E%3Cg transform='scale(0.658)' style='transform-origin:right'%3E%3Cg transform='rotate(30 0 0)' style='transform-origin:center'%3E%3Cg transform='rotate(-28.8 0 0)' style='transform-origin:center'%3E%3Cg transform='translate(1000 750)'%3E%3Cuse stroke='%23ff0aff' href='%23a' transform='rotate(-14.4 0 0) scale(0.856)'/%3E%3Cuse stroke='%23f81bff' href='%23a' transform='rotate(-12.6 0 0) scale(0.874)'/%3E%3Cuse stroke='%23f125ff' href='%23a' transform='rotate(-10.8 0 0) scale(0.892)'/%3E%3Cuse stroke='%23ea2dff' href='%23a' transform='rotate(-9 0 0) scale(0.91)'/%3E%3Cuse stroke='%23e333ff' href='%23a' transform='rotate(-7.2 0 0) scale(0.928)'/%3E%3Cuse stroke='%23dc39ff' href='%23a' transform='rotate(-5.4 0 0) scale(0.946)'/%3E%3Cuse stroke='%23d53dff' href='%23a' transform='rotate(-3.6 0 0) scale(0.964)'/%3E%3Cuse stroke='%23ce42ff' href='%23a' transform='rotate(-1.8 0 0) scale(0.982)'/%3E%3Cuse stroke='%23c645ff' href='%23a'/%3E%3Cuse stroke='%23bf49ff' href='%23a' transform='rotate(1.8 0 0) scale(1.018)'/%3E%3Cuse stroke='%23b74cff' href='%23a' transform='rotate(3.6 0 0) scale(1.036)'/%3E%3Cuse stroke='%23af4fff' href='%23a' transform='rotate(5.4 0 0) scale(1.054)'/%3E%3Cuse stroke='%23a751ff' href='%23a' transform='rotate(7.2 0 0) scale(1.072)'/%3E%3Cuse stroke='%239f54ff' href='%23a' transform='rotate(9 0 0) scale(1.09)'/%3E%3Cuse stroke='%239756ff' href='%23a' transform='rotate(10.8 0 0) scale(1.108)'/%3E%3Cuse stroke='%238f58ff' href='%23a' transform='rotate(12.6 0 0) scale(1.126)'/%3E%3Cuse stroke='%23865aff' href='%23a' transform='rotate(14.4 0 0) scale(1.144)'/%3E%3Cuse stroke='%237d5bff' href='%23a' transform='rotate(16.2 0 0) scale(1.162)'/%3E%3Cuse stroke='%23745dff' href='%23a' transform='rotate(18 0 0) scale(1.18)'/%3E%3Cuse stroke='%236a5eff' href='%23a' transform='rotate(19.8 0 0) scale(1.198)'/%3E%3Cuse stroke='%23605fff' href='%23a' transform='rotate(21.6 0 0) scale(1.216)'/%3E%3Cuse stroke='%235460ff' href='%23a' transform='rotate(23.4 0 0) scale(1.234)'/%3E%3Cuse stroke='%234861ff' href='%23a' transform='rotate(25.2 0 0) scale(1.252)'/%3E%3Cuse stroke='%233962ff' href='%23a' transform='rotate(27 0 0) scale(1.27)'/%3E%3Cuse stroke='%232663ff' href='%23a' transform='rotate(28.8 0 0) scale(1.288)'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
background-position:top;
background-size: cover;
      }
      @media only screen and (max-width: 600px ) {
    body{
       text-align: center;
 }
}
 @media only screen and (min-width: 1200px ) {
  .img-b{
 transform:rotate(45deg);
}
 }
 header{
  height: 23rem;
 }
#glitch-i {
  background: linear-gradient(to  bottom left, rgba(13, 219, 254, 1), rgba(237, 14, 248, 1));
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
  font-family: Monaco, monospace;
  font-size: 34px;
  width: 100%;
  text-align: center;
  position: absolute;
  top: 45%;
  left: 0;
  animation: 120ms 10 normal glitch;
}
@keyframes glitch {
  0% {
    opacity: 0;
    left: 0;
  }
  40%,
  80% {
    opacity: 1;
    left: -2px;
  }
}
  </style>
@endsection
