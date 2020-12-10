@extends('layouts.app')
@section('content')


    <h1 class="display-3 text-center">Job Submissions</h1>



    <div class="container">
        <a class="btn btn-primary" href="{{ URL::to('/') }}/jobs-excel">Export Excel</a>
        @foreach ($jobApplications as $application)

            <div class="card p-3 mt-4">
                <div class="row">
                    <h3 class="card-header col-md-12 "><strong>Name :</strong>
                        {{ $application->first_name . ' ' . $application->last_name }}
                    </h3>
                    <img src="public/images/{{ $application->photo }}" alt="..." class="img-thumbnail col-md-3 ">
                </div>

                <div class="card-body">

                    <h3 ><strong>From : </strong>{{ $application->email }}</h3>
                    <p ><strong>Message : </strong>{{ $application->phone }}</p>
                    <p><strong>Position : </strong>{{ $application->position }}</p>
                    <p><strong>Submitted At : </strong>{{ $application->created_at }}</p>
                    <a href="{{ route('applicant-details', $application->id) }}" class="btn btn-primary">view All
                        details</a>
                    <div class="mt-4">
                        <form action="{{ route('job-applications.delete', $application->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </div>

                </div>

            </div>

        @endforeach
        <div class="d-flex justify-content-center">
            {{ $jobApplications->links() }}
        </div>
    </div>


@endsection
