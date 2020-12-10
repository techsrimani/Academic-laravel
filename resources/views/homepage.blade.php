@extends('layouts.app')
@section('content')
<div class="row p-5 ml-5 mr-5">
    <div class="col-md-6 ">
        <h1 class="header-para1 fade-in"><strong>One-stop Cloud-based solutions for Academic institutes management<br> and
            collaboration<strong></h1>
    </div>
    <div class="col-md-6 rectangle-box "></div>
  </div>
  <div class="row p-5 ml-5 mr-5">
    <div class="col-md-6 rectangle-box2"></div>
    <div class="col-md-6 ">
        <h1 class="header-para1 fade-in"><strong>We are Hiring Developers</br>and DevOps,to join us</br><a>apply here</a></strong>
            </h1>
    </div>
  </div>
  <style>
      *{
box-sizing: border-box;
      }
      .rectangle-box{
    border:1px solid blue;
    width:35rem;
    height:40rem;
    background-image:linear-gradient(to left bottom,#0DDBFE,#ED0EF8);
    position: absolute;right:12%;top:-295px;
    border-radius:17.6%;
    transform:rotate(-140deg)
}
.rectangle-box2{
    border:1px solid blue;
    width:50rem;
    height:50rem;
    background-image:linear-gradient(to left bottom,#0DDBFE,#ED0EF8);
    position:relative;left:-300px;
    border-radius:17.6%;
    transform:rotate(-140deg)
}
  </style>
@endsection
