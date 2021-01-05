@extends('layouts.app')
@section('content')
    <section class="container header-main">
        <div class="row ">
            <div class="col-md-6 ">
                <h1 class="header-para1 fade-in"><strong>Sorry The Page you are looking for doesn't exist or not found <strong></h1>
            </div>


                <div class="col-md-6 para-2">
                    <h1 class="header-para2 fade-in"><strong>ERROR 404</strong>
                    </h1>
                </div>
            </div>


    </section>
    <style>
        .header-main{
            display: flex;justify-content: center;
          padding:8vw;

        }
        @media only screen and (max-width: 600px) {
            .header-main {
                text-align: center;
            }  }

    </style>
@endsection
