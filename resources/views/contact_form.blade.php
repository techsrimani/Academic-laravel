@extends('layouts.app')
@section('content')
    <section class=" container contact-us-body">
        <div class="row">
            <div class="col-md-6">
                <div id="map">
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="page-header">Contact Us</h1>
                <div class=" form-container">
                    <form class="myform" name="contact-form" action="{{ route('contact.post') }}" role="form" method="post">
                        @csrf
                        <!-- insert this next line immediately after the <form> opening tag -->
                        <button type=submit onclick="return false;" style="display:none;"></button>
                        <input id='step2' type='checkbox'>
                        <div id="part1" class="form-group">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">First up,what is your name & e-mail?</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 slide one active">
                                        <input type="text" id="name" class="form-control" name="fname"
                                            placeholder="First Name" aria-describedby="sizing-addon1">
                                        <span id="name_error" style='color: red' ;></span>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="lastname" class="form-control" placeholder="Last Name"
                                            aria-describedby="sizing-addon1" name="lname">
                                        <span id="name2_error" style='color: red' ;></span>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" id="c_email" class="form-control" placeholder="Email"
                                            name="email" required>
                                        <span id="name3_error" style='color: red' ;></span>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="phone" id="c_number" class="form-control" name='phone'
                                            placeholder="Phone">
                                        <span id="error" style='color: red'></span>
                                    </div>
                                </div>
                                <div class="btn-group btn-group-lg" role="group" aria-label="...">
                                    <label for='step2' id="continue-step2" class="continue">
                                        <div class="button btn-contact" onclick="showName()">Continue</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="part2" class="form-group">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Let us know your requirement/ query/ suggestions/ complaint,
                                        <span id="show"></span>
                                    </h3>
                                </div>
                                <textarea id="message-c" class="form-control" name="message"
                                    placeholder="Message"></textarea>
                                <div class="btn-group btn-group-lg" role="group" aria-label="...">
                                    <label for='step2' id="back-step2" class="back">
                                        <div class="btn btn-default btn-primary btn-lg btn-contact">Back</div>
                                    </label>
                                    <label class="continue">
                                        <button id="btn-submit" type="submit"
                                            class="btn-contact submit-contact">Submit</button>
                                    </label>
                                    @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function showName(e) {
                this.errorMessage();
                var firstname = document.getElementById("name").value;
                document.getElementById("show").innerText = firstname;
                document.getElementById("show").style.textTransform = "capitalize";
            }

            function errorMessage() {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                var error = document.getElementById("error");
                var fname = document.getElementById("name").value;
                var lname = document.getElementById("lastname").value;
                var ename = document.getElementById("c_email").value;
                var numx = document.getElementById("c_number").value;
                //First Name
                if (fname == null || fname == "") {
                    nameError = "Please enter name";
                    document.getElementById("name_error").style.display = "block";
                    document.getElementById("name_error").innerHTML = nameError;
                    document.getElementById("step2").checked = true;
                }
                //Last Name
                if (lname == null || lname == "") {
                    lError = "Please enter last name";
                    document.getElementById("name2_error").style.display = "block";
                    document.getElementById("name2_error").innerHTML = lError;
                    document.getElementById("step2").checked = true;
                }
                //email
                if (ename == null || ename == "") {
                    eError = "Please enter your email";
                    document.getElementById("name3_error").style.display = "block";
                    document.getElementById("name3_error").innerHTML = eError;
                    document.getElementById("step2").checked = true;
                }
                if (!emailReg.test(ename)) {
                    eError = "Please enter a Valid email";
                    document.getElementById("name3_error").style.display = "block";
                    document.getElementById("name3_error").innerHTML = eError;
                    document.getElementById("step2").checked = true;
                }
                //mobile number
                if (numx == null || numx.length < 10 || numx.length > 10) {
                    nError = "Please enter a Valid 10 digit Mobile Number";
                    document.getElementById("error").style.display = "block";
                    document.getElementById("error").innerHTML = nError;
                    document.getElementById("step2").checked = true;
                } else if (fname != null || fname != "") {
                    nameError = "Please enter your name";
                    document.getElementById("name_error").style.display = "none";
                    document.getElementById("name2_error").style.display = "none";
                    document.getElementById("name3_error").style.display = "none";
                    document.getElementById("error").style.display = "none";
                    document.getElementById("name_error").innerHTML = nameError;
                } else {
                    return true;
                }
            }

        </script>
        <script>
            $("button.continue").html("Next Step...")

        </script>
        <script>
            // Initialize and add the map
            function initMap() {
                const Bengaluru = {
                    lat: 12.966667,
                    lng: 77.566667
                };
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 4,
                    center: Bengaluru,
                });
                const marker = new google.maps.Marker({
                    position: Bengaluru,
                    map: map,
                });
            }

        </script>
    </section>
    <style>
        .contact-us-body {
            text-align: center;
        }

        .form-container {
            width: 100%;
            max-width: 350px;
            margin: 0 auto;
        }

        #map {
            height: 500px;
            width: 100%;
        }

        input[type="text"],
        input[type=email],
        input[type=phone],
        input[type=number],
        textarea {
            background: transparent;
            width: 90%;
            margin: 20px auto;
            border: 1px solid grey;
        }

        .btn-c,
        .btn-c:visited {
            background: linear-gradient(to left, #0DDBFE, #ED0EF8);
            text-transform: uppercase;
            text-decoration: none;
            padding: 0.5rem 2rem;
            display: inline-block;
            border-radius: 2.50rem;
            transition: all .2s;
            position: relative;
            left: 25%;
            font-size: 1rem;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-c:hover {
            transform: translateY(-3px);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
        }

        .btn-c:hover::after {
            transform: scaleX(1.4) scaleY(1.6);
            opacity: 0;
        }

        textarea {
            min-height: 150px;
        }

        .panel {
            background: transparent;
            border: 0.5px solid cyan;
            border-radius: 2.2em;
            box-shadow: 5px 5px rgba(0, 98, 90, 0.4)
        }

        .panel-heading {
            margin-bottom: 20px;
        }

        .btn-contact,
        .btn-contact:visited {
            background: linear-gradient(to left, #0DDBFE, #ED0EF8);
            text-transform: uppercase;
            text-decoration: none;
            padding: 0.5rem 1.5rem;
            display: inline-block;
            border-radius: 2.50rem;
            transition: all .2s;
            position: relative;
            left: 0;
            font-size: 1rem;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-contact:hover {
            transform: translateY(-3px);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
        }

        .panel-title {
            margin-top: 1.4rem;
        }

        .img-main-1 {
            width: 100%;
            max-width: 100px;
        }

        .back {
            float: left;
        }

        .continue {
            float: right;
        }
        }

        /* Multi-Part CSS */
        input[type=checkbox] {
            position: absolute;
            background: transparent;
            /* Position the checkbox in upper left corner */
            opacity: 0;
        }

        /* Styling Parts */
        #part1,
        #part2,
            {
            z-index: 2;
            display: block;
            height: auto;
            opacity: 1;
            transition: opacity 1s ease-in-out;
        }

        /* Hidden Parts */
        #part2 {
            opacity: 0;
            height: 0;
            overflow: hidden;
        }

        /* Show Step 2 & Hide Step 1 */
        #step2 {
            background: transparent;
        }

        #step2:checked~#part2 {
            opacity: 1;
            height: auto;
        }

        #step2:checked~#part1 {
            opacity: 0;
            height: 0;
            display: none;
        }

    </style>
    <script>
        $(document).ready(function() {
            let selector = (e) => {
                return document.querySelector(e)
            }
            $('#btn-submit').click((e) => {
                $(".err").hide();
                var hasError = false;
                let message = $('#message-c').val().trim();
                if (message == '') {
                    $("#message-c").after(
                        '<span  class="err  text-center">Please enter your message.</span>');
                    hasError = true;
                } else if (message.length < 13) {
                    $("#message-c").after(
                        '<span  class="err  text-center"><strong>Atleast include 5 words in your message.<strong></span>'
                    );
                    hasError = true;
                }

                if (hasError == true) {
                    return false;
                } else {

                    $('#btn-submit').after('<p class="success">Thanks for contacting</p>')
                    setTimeout(() => {
                        $('.success').hide()
                    }, 1000)
                }
            })
        });

    </script>
@endsection
