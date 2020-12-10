@extends('layouts.app')
@section('content')
    <section class="contact-us-body">
        <h1 class="header-primary display-1">Contact Us.</h1>
        <div class="form-container">
            <form action="" role="form">
                <input id='step2' type='checkbox'>
                <input id='step3' type='checkbox'>
                <div id="part1" class="form-group">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Provide Your Name</h3>
                        </div>
                        <input type="text" id="name" class="form-control" placeholder="Full Name"
                            aria-describedby="sizing-addon1" required autofocus>
                        <div class="btn-group btn-group-lg" role="group" aria-label="...">
                            <label for='step2' id="continue-step2" class="continue">
                                <div class="btn btn-default btn-success btn-lg">Continue</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div id="part2" class="form-group">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">We Require some more information</br>About You</h3>
                        </div>
                        <input type="email" id="email" class="form-control" placeholder="Email" required>
                        <input type="phone" id="phone" class="form-control" placeholder="Phone">
                        <div class="btn-group btn-group-lg btn-group-justified" role="group" aria-label="...">
                            <label for='step2' id="back-step2" class="back">
                                <div class="btn btn-default btn-primary btn-lg" role="button">Back</div>
                            </label>
                            <label for='step3' id="continue-step3" class="continue">
                                <div class="btn btn-default btn-success btn-lg" role="button">Continue</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div id="part3" class="form-group">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Write Here, We Will Reach You soon.</h3>
                        </div>
                        <textarea id="message" class="form-control" placeholder="Message"></textarea>
                        <div class="btn-group btn-group-lg" role="group" aria-label="...">
                            <label for='step3' id="back-step3" class="back">
                                <div class="btn btn-default btn-primary btn-lg">Back</div>
                            </label>
                            <label class="continue">
                                <button type="submit" class="btn btn-default btn-success btn-lg">Submit</button>
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <style>
        body {
            text-align: center;
            background: linear-gradient(100deg, #FFFFFF, #0DDBFE, #ED0EF8, #757BFB);
        }

        .form-container {
            width: 100%;
            max-width: 320px;
            margin: 0 auto;
        }

        input[type=text],
        input[type=email],
        input[type=phone],
        input[type=number],

        textarea {
            width: 90%;
            margin: 20px auto;
            border: 1px solid white;
            box-shadow: 0 0 1px 1px white;
        }

        textarea {
            min-height: 150px;
        }

        .panel {
            background: rgba(0, 0, 0, .2);

            .panel-heading {
                margin-bottom: 20px;
            }

            .btn-group {
                width: 90%;
                margin: 0 auto 10px auto;
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
            /* Position the checkbox in upper left corner */
            opacity: 0;
        }

        /* Styling Parts */
        #part1,
        #part2,
        #part3 {
            z-index: 2;
            display: block;
            height: auto;
            opacity: 1;
            transition: opacity 1s ease-in-out;
        }

        /* Hidden Parts */
        #part2,
        #part3 {
            opacity: 0;
            height: 0;
            overflow: hidden;
        }

        /* Show Step 2 & Hide Step 1 */
        #step2:checked~#part2 {
            opacity: 1;
            height: auto;
        }

        #step2:checked~#part1 {
            opacity: 0;
            height: 0;
            display: none;
        }

        /* Show Step 3  & Hide Step 2 */
        #step3:checked~#part3 {
            opacity: 1;
            height: auto;
        }

        #step3:checked~#part2 {
            opacity: 0;
            width: 0;
            height: 0;
        }

    </style>
@endsection
