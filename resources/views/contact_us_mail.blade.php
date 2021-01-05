

<body style="padding: 150px; border:solid 50px blue;">
    <img src="http://localhost:8000/images/academic-logo.webp" alt="alter text">

    <h3 style="text-align: left; color:blue; font-size:40px; ">First Name {{ $data['fname'] }}</h3>

    <h3 style="text-align: left; color:blue; font-size:40px; ">Last Name {{ $data['lname'] }}</h3>

    <h3 style="text-align: left; color:blue; font-size:40px;"> Phone {{ $data['phone'] }} </h3>

    <h3 style="text-align: left; color:blue; font-size:40px;"> Email {{ $data['email'] }} </h3>

    <p style="text-align: left; color:black; font-size:20px;"> Message {{ $data['message'] }}</p>
</body>
