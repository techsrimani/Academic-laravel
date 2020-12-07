@extends('layouts.app')
@section('content')


    <h1 class="display-3 text-center">Contact Submissions</h1>



    <div class="container">
        @foreach ($contactUs as $contact)

            <div class="card p-3 mt-4">

                <h3 class="card-header"><strong>Name :</strong> {{ $contact->name }}</h3>
                <div class="card-body">
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                    <h3><strong>From : </strong>{{ $contact->email }}</h3>
                    <p><strong>Message : </strong>{{ $contact->message }}</p>
                    <p><strong>Submitted At : </strong>{{ $contact->created_at }}</p>
                    <div class="card-link">

                    <a href="{{ route('contact.reply',$contact->id) }}" class="btn btn-primary">Reply</a>

                    <form action="{{ route('contact.delete',$contact->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>



                    </div>
                </div>

            </div>

        @endforeach
        <div class="d-flex justify-content-center">
            {{ $contactUs->links() }}
        </div>
    </div>



@endsection
