
@extends('layouts.app')
@section('content')
<div class="container">
<h1 class="display-1 text-dark text-center">Contact Us</h1>

<form  method="post" action="{{ route('contact-us') }}">

    @csrf

    <div class="form-group">
        <label >Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

        <!-- Error -->
        @if ($errors->has('name'))
        <div class="error alert-danger">
            {{ $errors->first('name') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label >Email</label>
        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

        @if ($errors->has('email'))
        <div class="error alert-danger">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label >Phone</label>
        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">

        @if ($errors->has('phone'))
        <div class="error alert-danger">
            {{ $errors->first('phone') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label >Message</label>
        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
            rows="4"></textarea>

        @if ($errors->has('message'))
        <div class="error alert-danger">
            {{ $errors->first('message') }}
        </div>
        @endif
    </div>

    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
</form>
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif


</div>
@endsection








