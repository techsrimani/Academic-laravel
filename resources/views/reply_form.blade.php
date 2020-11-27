@extends('layouts.app')
@section('content')


    <h1 class="display-3 text-center">Contact Submissions</h1>



    <div class="container">


        <div class="card p-3 mt-4">

            <h3 class="card-header"><strong>Name :</strong> {{ $contactUs->name }}</h3>
            <div class="card-body">
                <h3><strong>From : </strong>{{ $contactUs->email }}</h3>
                <p><strong>Message : </strong>{{ $contactUs->message }}</p>
                <p><strong>Submitted At : </strong>{{ $contactUs->created_at }}</p>
                <div class="card-link">

                    <form method="post" action="{{ route('contact-us') }}">

                        @csrf

                        <div class="form-group">
                            <label>Type here to reply.</label>
                            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message"
                                id="message" rows="4"></textarea>

                            @if ($errors->has('message'))
                                <div class="error alert-danger">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                        </div>

                        <input type="submit" name="send" value="reply" class="btn btn-dark btn-block">
                    </form>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
            </div>

        </div>


        <div class="d-flex justify-content-center">

        </div>
    </div>


@endsection
