@extends('layouts.app')
@section('content')


    <h1 class="display-3 text-center">Contact Submissions</h1>



    <div class="container">
        @foreach ($contactUs as $contact)

            <div class="card p-3 mt-4">

                <h3 class="card-header"><strong>Name :</strong> {{ $contact->name }}</h3>
                <div class="card-body">
                    <h3><strong>From : </strong>{{ $contact->email }}</h3>
                    <p><strong>Message : </strong>{{ $contact->message }}</p>
                    <p><strong>Submitted At : </strong>{{ $contact->created_at }}</p>
                    <div class="card-link">

<<<<<<< Updated upstream
                    <a href="{{ route('contact.reply',$contact->id) }}" class="btn btn-primary">Reply</a>
=======
                    <!-- <a href="{{ route('contact.reply',$contact->id) }}" class="btn btn-primary">Reply</a> -->
>>>>>>> Stashed changes
                    </div>
                </div>

            </div>

        @endforeach
        <div class="d-flex justify-content-center">
            {{ $contactUs->links() }}
        </div>
    </div>
<<<<<<< Updated upstream
=======
    <style>
body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
form {
    margin:10% auto 0 auto;
	padding:30px;
	width:100%;
	height:auto;
	overflow:hidden;
	background:linear-gradient(to right bottom,#0DDBFE,#757BFB,#ED0EF8);;
	border-radius:10px;
}
.form-heading{
    color:black;
    font-size:1.2rem;
}


form label {
	font-size:14px;
	color:darkgray;
	cursor:pointer;
}

form label,
form input {
	float:left;
	clear:both;
}

form input {
	margin:15px 0;
	padding:15px 10px;
	width:100%;
	outline:none;
	border:1px solid #bbb;
	border-radius:20px;
	display:inline-block;
	-webkit-box-sizing:border-box;
	   -moz-box-sizing:border-box;
	        box-sizing:border-box;
    -webkit-transition:0.2s ease all;
	   -moz-transition:0.2s ease all;
	    -ms-transition:0.2s ease all;
	     -o-transition:0.2s ease all;
	        transition:0.2s ease all;
}

form input[type=text]:focus,
form input[type="password"]:focus {
	border-color:cornflowerblue;
}

input[type=submit] {
	padding:15px 50px;
    width:auto;
    background: #ED0EF8;  
	
	border:none;
	color:white;
	cursor:pointer;
	display:inline-block;
	float:right;
	clear:right;
	-webkit-transition:0.2s ease all;
	   -moz-transition:0.2s ease all;
	    -ms-transition:0.2s ease all;
	     -o-transition:0.2s ease all;
	        transition:0.6s ease all;
}

input[type=submit]:hover {

    background-position:right;
}




.text-primary,.display-1{
	margin:0 auto;

	font-family:cursive;
	font-size:4rem;
	font-weight:bold;
	text-align:center;
	color:lightgray;
	-webkit-transition:0.2s ease all;
	   -moz-transition:0.2s ease all;
	    -ms-transition:0.2s ease all;
	     -o-transition:0.2s ease all;
	        transition:0.2s ease all;
}

.display-1:hover {
	color:cornflowerblue;
}
       </style>
>>>>>>> Stashed changes


@endsection
