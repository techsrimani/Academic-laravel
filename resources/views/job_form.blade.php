@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="display-1 text-dark text-center">Apply for Job</h1>

        <form method="post" enctype="multipart/form-data" action="{{ route('apply-job') }}">

            @csrf

            <div class="form-row">

                <div class="form-group col-md-12">
                    <label>Select Role You are applying for</label>
                    <select class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="position">
                        <option selected disabled>choose ...</option>
                        <option>Full Stack Web Developer</option>
                        <option>Web Developer</option>
                        <option>Android App Developer</option>
                        <option>Ios App Developer</option>
                        <option>DevOPS and MS Azure Admin</option>

                    </select>
                    <!-- Error -->
                    @if ($errors->has('position'))
                        <div class="error alert-danger">
                            {{ $errors->first('position') }}

                        </div>
                    @endif
                </div>


                <div class="form-group col-md-6">
                    <label>First Name</label>
                    <input type="text" class="form-control {{ $errors->has('first_name') ? 'error' : '' }}"
                        name="first_name">

                    <!-- Error -->
                    @if ($errors->has('first_name'))
                        <div class="error alert-danger">
                            {{ $errors->first('first_name') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>Last Name</label>
                    <input type="text" class="form-control {{ $errors->has('last_name') ? 'error' : '' }}" name="last_name">

                    <!-- Error -->
                    @if ($errors->has('last_name'))
                        <div class="error alert-danger">
                            {{ $errors->first('last_name') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>Passpost size Photo</label>
                    <input type="file" class="form-control {{ $errors->has('photo') ? 'error' : '' }}" name="photo" />

                    <!-- Error -->
                    @if ($errors->has('photo'))
                        <div class="error alert-danger">
                            {{ $errors->first('photo') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>Date of Birth</label>
                    <input type="date" class="form-control {{ $errors->has('dob') ? 'error' : '' }}" name="dob">

                    <!-- Error -->
                    @if ($errors->has('dob'))
                        <div class="error alert-danger">
                            {{ $errors->first('dob') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>Age</label>
                    <input type="text" class="form-control {{ $errors->has('age') ? 'error' : '' }}" name="age">

                    <!-- Error -->
                    @if ($errors->has('age'))
                        <div class="error alert-danger">
                            {{ $errors->first('age') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>Sex</label>
                    <select class="form-control {{ $errors->has('sex') ? 'error' : '' }}" name="sex">
                        <option selected disabled>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>

                    </select>
                    <!-- Error -->
                    @if ($errors->has('sex'))
                        <div class="error alert-danger">
                            {{ $errors->first('sex') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email">

                    <!-- Error -->
                    @if ($errors->has('email'))
                        <div class="error alert-danger">
                            {{ $errors->first('email') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>Alternate Email</label>
                    <input type="email" class="form-control {{ $errors->has('alt_email') ? 'error' : '' }}"
                        name="alt_email">

                    <!-- Error -->
                    @if ($errors->has('alt_email'))
                        <div class="error alert-danger">
                            {{ $errors->first('alt_email') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>Mobile Number*</label>
                    <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone">

                    <!-- Error -->
                    @if ($errors->has('phone'))
                        <div class="error alert-danger">
                            {{ $errors->first('phone') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>Alternate Mobile Number</label>
                    <input type="text" class="form-control {{ $errors->has('alt_phone') ? 'error' : '' }}" name="alt_phone">

                    <!-- Error -->
                    @if ($errors->has('alt_phone'))
                        <div class="error alert-danger">
                            {{ $errors->first('alt_phone') }}

                        </div>
                    @endif
                </div>



                <h1 class="display-5 text-dark text-left col-md-12">Parent details</h1>

                <div class="form-group col-md-4">
                    <label>Father Name</label>
                    <input type="text" class="form-control {{ $errors->has('father_name') ? 'error' : '' }}"
                        name="father_name">

                    <!-- Error -->
                    @if ($errors->has('father_name'))
                        <div class="error alert-danger">
                            {{ $errors->first('father_name') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    <label>Father Ph No</label>
                    <input type="text" class="form-control {{ $errors->has('father_phone') ? 'error' : '' }}"
                        name="father_phone">

                    <!-- Error -->
                    @if ($errors->has('father_phone'))
                        <div class="error alert-danger">
                            {{ $errors->first('father_phone') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    <label>Father Occupation</label>
                    <input type="text" class="form-control {{ $errors->has('father_occupation') ? 'error' : '' }}"
                        name="father_occupation">

                    <!-- Error -->
                    @if ($errors->has('father_occupation'))
                        <div class="error alert-danger">
                            {{ $errors->first('father_occupation') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    <label>Mother Name</label>
                    <input type="text" class="form-control {{ $errors->has('mother_name') ? 'error' : '' }}"
                        name="mother_name">

                    <!-- Error -->
                    @if ($errors->has('mother_name'))
                        <div class="error alert-danger">
                            {{ $errors->first('mother_name') }}

                        </div>
                    @endif
                </div>


                <div class="form-group col-md-4">
                    <label>Mother Ph No</label>
                    <input type="text" class="form-control {{ $errors->has('mother_phone') ? 'error' : '' }}"
                        name="mother_phone">

                    <!-- Error -->
                    @if ($errors->has('mother_phone'))
                        <div class="error alert-danger">
                            {{ $errors->first('mother_phone') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    <label>Mother Occupation</label>
                    <input type="text" class="form-control {{ $errors->has('Mother_occupation') ? 'error' : '' }}"
                        name="mother_occupation">

                    <!-- Error -->
                    @if ($errors->has('mother_occupation'))
                        <div class="error mother-danger">
                            {{ $errors->first('mother_occupation') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    <label>Gaurdian Name</label>
                    <input type="text" class="form-control {{ $errors->has('gaurdian_name') ? 'error' : '' }}"
                        name="gaurdian_name">

                    <!-- Error -->
                    @if ($errors->has('gaurdian_name'))
                        <div class="error alert-danger">
                            {{ $errors->first('gaurdian_name') }}

                        </div>
                    @endif
                </div>


                <div class="form-group col-md-4">
                    <label>Gaurdian Ph No</label>
                    <input type="text" class="form-control {{ $errors->has('gaurdian_phone') ? 'error' : '' }}"
                        name="gaurdian_phone">

                    <!-- Error -->
                    @if ($errors->has('gaurdian_phone'))
                        <div class="error alert-danger">
                            {{ $errors->first('gaurdian_phone') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    <label>Gaurdian Occupation</label>
                    <input type="text" class="form-control {{ $errors->has('gaurdian_occupation') ? 'error' : '' }}"
                        name="gaurdain_occupation">

                    <!-- Error -->
                    @if ($errors->has('gaurdian_occupation'))
                        <div class="error alert-danger">
                            {{ $errors->first('gaurdian_occupation') }}

                        </div>
                    @endif
                </div>

                <h1 class="display-5 text-dark text-left col-md-12">Permananet Address</h1>

                <div class="form-group col-md-6">
                    <label>Address Line1*</label>
                    <input type="text" class="form-control {{ $errors->has('address_l1') ? 'error' : '' }}"
                        name="address_l1">

                    <!-- Error -->
                    @if ($errors->has('address_l1'))
                        <div class="error alert-danger">
                            {{ $errors->first('address_l1') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>Address Line2</label>
                    <input type="text" class="form-control {{ $errors->has('address_l2') ? 'error' : '' }}"
                        name="address_l2">

                    <!-- Error -->
                    @if ($errors->has('address_l2'))
                        <div class="error alert-danger">
                            {{ $errors->first('address_l2') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control {{ $errors->has('city') ? 'error' : '' }}" name="city">

                    <!-- Error -->
                    @if ($errors->has('city'))
                        <div class="error alert-danger">
                            {{ $errors->first('city') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>
                        State / Province
                    </label>
                    <input type="text" class="form-control {{ $errors->has('state') ? 'error' : '' }}" name="state">

                    <!-- Error -->
                    @if ($errors->has('state'))
                        <div class="error alert-danger">
                            {{ $errors->first('state') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>
                        Postal / Zip Code
                    </label>
                    <input type="text" class="form-control {{ $errors->has('pincode') ? 'error' : '' }}" name="pincode">

                    <!-- Error -->
                    @if ($errors->has('pincode'))
                        <div class="error alert-danger">
                            {{ $errors->first('pincode') }}

                        </div>
                    @endif
                </div>




                <div class="form-group col-md-6">
                    <label>Country</label>
                    <select class="form-control {{ $errors->has('country') ? 'error' : '' }}" name="country">
                        <option selected disabled>Choose...</option>
                        <option>India</option>
                        <option>USA</option>
                        <option>UK</option>
                        <option>New Zealand</option>
                        <option>UAE</option>
                        <option>Australia</option>
                    </select>
                    <!-- Error -->
                    @if ($errors->has('country'))
                        <div class="error alert-danger">
                            {{ $errors->first('country') }}

                        </div>
                    @endif
                </div>

                <h1 class="display-5 text-dark text-left col-md-12">Present Address</h1>

                <div class="form-group col-md-6">
                    <label>Address Line1*</label>
                    <input type="text" class="form-control {{ $errors->has('present_address_l1') ? 'error' : '' }}"
                        name="present_address_l1">

                    <!-- Error -->
                    @if ($errors->has('present_address_l1'))
                        <div class="error alert-danger">
                            {{ $errors->first('present_address_l1') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>Address Line2</label>
                    <input type="text" class="form-control {{ $errors->has('present_address_l2') ? 'error' : '' }}"
                        name="present_address_l2">

                    <!-- Error -->
                    @if ($errors->has('present_address_l2'))
                        <div class="error alert-danger">
                            {{ $errors->first('present_address_l2') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control {{ $errors->has('present_city') ? 'error' : '' }}"
                        name="present_city">

                    <!-- Error -->
                    @if ($errors->has('present_city'))
                        <div class="error alert-danger">
                            {{ $errors->first('present_city') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>
                        State / Province
                    </label>
                    <input type="text" class="form-control {{ $errors->has('present_state') ? 'error' : '' }}"
                        name="present_state">

                    <!-- Error -->
                    @if ($errors->has('present_state'))
                        <div class="error alert-danger">
                            {{ $errors->first('present_state') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label>
                        Postal / Zip Code
                    </label>
                    <input type="text" class="form-control {{ $errors->has('present_pincode') ? 'error' : '' }}"
                        name="present_pincode">

                    <!-- Error -->
                    @if ($errors->has('present_pincode'))
                        <div class="error alert-danger">
                            {{ $errors->first('present_code') }}

                        </div>
                    @endif
                </div>




                <div class="form-group col-md-6">
                    <label>Country</label>
                    <select class="form-control {{ $errors->has('present_country') ? 'error' : '' }}"
                        name="present_country">
                        <option selected disabled>Choose...</option>
                        <option>India</option>
                        <option>USA</option>
                        <option>UK</option>
                        <option>New Zealand</option>
                        <option>UAE</option>
                        <option>Australia</option>
                    </select>
                    <!-- Error -->
                    @if ($errors->has('present_country'))
                        <div class="error alert-danger">
                            {{ $errors->first('present_country') }}

                        </div>
                    @endif
                </div>

                <h1 class="display-5 text-dark text-left col-md-12">Education Details</h1>
                <table class="table table-bordered" id="dynamicTable">

                    <tr>

                        <th>Class / Degree</th>

                        <th>School/College</th>

                        <th>Year of Completion</th>

                        <th>Aggregate %</th>
                        <th>Remarks</th>

                    </tr>

                    <tr>

                        <td><input type="text" name="addmore[0][degree]" class="form-control" />
                        </td>

                        <td><input type="text" name="addmore[0][institute]" class="form-control" />
                        </td>

                        <td><input type="text" name="addmore[0][year]" class="form-control" /></td>

                        <td><input type="text" name="addmore[0][aggregate]" class="form-control" /></td>

                        <td><input type="text" name="addmore[0][remarks]" class="form-control" /></td>


                        <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>


                    </tr>
                    <tr>
                        @if ($errors->has('addmore.*'))
                            <div class="error alert-danger">
                                fields in the educational details are missing year should be less than 2021, aggregate less
                                than 99 and remarks less than 190 characters

                            </div>
                        @endif
                    </tr>

                </table>



                <label class="col-md-12">Select Employee Status</label>


                <div class="radio col-md-4">
                    <label><input type="radio" name="employee_status" value="Employed">Employed</label>
                </div>
                <div class="radio col-md-4">
                    <label><input type="radio" name="employee_status" value="Self Employed">Self Employed</label>
                </div>
                <div class="radio col-md-4">
                    <label><input type="radio" name="employee_status" value="Student">Student</label>
                </div>
                <div class="radio col-md-4">
                    <label><input type="radio" name="employee_status" value="Unemployed">Unemployed</label>
                </div>
                <div class="radio col-md-4">
                    <label><input type="radio" name="employee_status" value="Freelancer">Freelancer</label>
                </div>
                <div class="radio col-md-4">
                    <label><input type="radio" name="employee_status" value="Fresher">Fresher</label>
                </div>

                @if ($errors->has('employee_status'))
                    <div class="error alert-danger">
                        {{ $errors->first('employee_status') }}

                    </div>
                @endif



                <div class="form-group col-md-4">
                    <label>Current CTC in number</label>
                    <input type="text" class="form-control {{ $errors->has('current_ctc') ? 'error' : '' }}"
                        name="current_ctc">

                    <!-- Error -->
                    @if ($errors->has('current_ctc'))
                        <div class="error alert-danger">
                            {{ $errors->first('current_ctc') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    <label>Expected CTC in number</label>
                    <input type="text" class="form-control {{ $errors->has('expectedt_ctc') ? 'error' : '' }}"
                        name="expected_ctc">

                    <!-- Error -->
                    @if ($errors->has('expected_ctc'))
                        <div class="error alert-danger">
                            {{ $errors->first('expected_ctc') }}

                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    <label>Number of years experience in coding</label>
                    <input type="text" class="form-control {{ $errors->has('experience') ? 'error' : '' }}"
                        name="experience">

                    <!-- Error -->
                    @if ($errors->has('experience'))
                        <div class="error alert-danger">
                            {{ $errors->first('experience') }}

                        </div>
                    @endif
                </div>



                <table class="table table-bordered">

                    <tr>

                        <th>Organisation / Coding</th>

                        <th>From</th>

                        <th>To </th>

                        <th>Top 3 accomplishments</th>
                        <th>Role</th>

                    </tr>

                    <tr>

                        <td><input type="text" name="company1" class="form-control" />
                            @if ($errors->has('company1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('company1') }}

                                </div>
                            @endif
                        </td>

                        <td><input type="date" name="from1" class="form-control" />
                            @if ($errors->has('from1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('from1') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="date" name="to1" class="form-control" />
                            @if ($errors->has('to1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('to1') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" name="accomplishments1" class="form-control" />
                            @if ($errors->has('accomplishments1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('accomplishments1') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" name="role1" class="form-control" />
                            @if ($errors->has('role1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('role1') }}
                                </div>
                            @endif
                        </td>




                    </tr>

                    <tr>

                        <td><input type="text" name="company2" class="form-control" />
                            @if ($errors->has('company2'))
                                <div class="error alert-danger">
                                    {{ $errors->first('company2') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="date" name="from2" class="form-control" />
                            @if ($errors->has('from2'))
                                <div class="error alert-danger">
                                    {{ $errors->first('from2') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="date" name="to2" class="form-control" />
                            @if ($errors->has('to2'))
                                <div class="error alert-danger">
                                    {{ $errors->first('to2') }}
                                </div>
                            @endif

                        </td>

                        <td><input type="text" name="accomplishments2" class="form-control" />
                            @if ($errors->has('accomplishments2'))
                                <div class="error alert-danger">
                                    {{ $errors->first('accomplishments2') }}
                                </div>
                            @endif

                        </td>

                        <td><input type="text" name="role2" class="form-control" />
                            @if ($errors->has('role2'))
                                <div class="error alert-danger">
                                    {{ $errors->first('role2') }}
                                </div>
                            @endif
                        </td>



                    </tr>

                    <tr>

                        <td><input type="text" name="company3" class="form-control" />
                            @if ($errors->has('company3'))
                                <div class="error alert-danger">
                                    {{ $errors->first('company3') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="date" name="from3" class="form-control" />
                            @if ($errors->has('from3'))
                                <div class="error alert-danger">
                                    {{ $errors->first('from3') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="date" name="to3" class="form-control" />
                            @if ($errors->has('to3'))
                                <div class="error alert-danger">
                                    {{ $errors->first('to3') }}
                                </div>
                            @endif
                        </td>


                        <td><input type="text" name="accomplishments3" class="form-control" />
                            @if ($errors->has('accomplishments3'))
                                <div class="error alert-danger">
                                    {{ $errors->first('accomplishments3') }}
                                </div>
                            @endif

                        </td>

                        <td><input type="text" name="role3" class="form-control" />
                            @if ($errors->has('role3'))
                            <div class="error alert-danger">
                                {{ $errors->first('role3') }}
                            </div>
                        @endif
                        </td>

                    </tr>

                    <tr>

                        <td><input type="text" name="company4" class="form-control" />
                            @if ($errors->has('company4'))
                            <div class="error alert-danger">
                                {{ $errors->first('company4') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="date" name="from4" class="form-control" />
                            @if ($errors->has('from4'))
                            <div class="error alert-danger">
                                {{ $errors->first('from4') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="date" name="to4" class="form-control" />
                            @if ($errors->has('to4'))
                            <div class="error alert-danger">
                                {{ $errors->first('to4') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="accomplishments4" class="form-control" />
                            @if ($errors->has('accomplishments4'))
                            <div class="error alert-danger">
                                {{ $errors->first('accomplishments4') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="role4" class="form-control" />
                            @if ($errors->has('role4'))
                            <div class="error alert-danger">
                                {{ $errors->first('role4') }}
                            </div>
                        @endif

                        </td>

                    </tr>

                    <tr>

                        <td><input type="text" name="company5" class="form-control" />
                            @if ($errors->has('company5'))
                            <div class="error alert-danger">
                                {{ $errors->first('company5') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="date" name="from5" class="form-control" />
                            @if ($errors->has('from5'))
                            <div class="error alert-danger">
                                {{ $errors->first('from5') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="date" name="to5" class="form-control" />
                            @if ($errors->has('to5'))
                            <div class="error alert-danger">
                                {{ $errors->first('to5') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="accomplishments5" class="form-control" />
                            @if ($errors->has('accomplishments5'))
                            <div class="error alert-danger">
                                {{ $errors->first('accomplishments5') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="role5" class="form-control" />
                            @if ($errors->has('role5'))
                            <div class="error alert-danger">
                                {{ $errors->first('role5') }}
                            </div>
                        @endif
                        </td>

                    </tr>



                </table>

                <h1 class="display-5 text-dark text-left col-md-12">Top three projects of you</h1>

                <table class="table table-bordered">

                    <tr>

                        <th>Links of your projects</th>

                        <th>Your Role</th>

                        <th>Skills Used</th>

                        <th>% of contribution</th>


                    </tr>

                    <tr>

                        <td><input type="text" name="link1" class="form-control" />
                            @if ($errors->has('link1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('link1') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" name="your_role1" class="form-control" />
                            @if ($errors->has('your_role1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('your_role1') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" name="skills1" class="form-control" />
                            @if ($errors->has('skills1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('skills1') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" name="contribution1" class="form-control" />
                            @if ($errors->has('contribution1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('contribution1') }}
                                </div>
                            @endif
                        </td>

                    </tr>

                    <tr>

                        <td><input type="text" name="link2" class="form-control" />
                            @if ($errors->has('link2'))
                                <div class="error alert-danger">
                                    {{ $errors->first('link2') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" name="your_role2" class="form-control" />
                            @if ($errors->has('your_role2'))
                                <div class="error alert-danger">
                                    {{ $errors->first('your_role2') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" name="skills2" class="form-control" />
                            @if ($errors->has('skills2'))
                            <div class="error alert-danger">
                                {{ $errors->first('skills2') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="contribution2" class="form-control" />
                            @if ($errors->has('contribution2'))
                            <div class="error alert-danger">
                                {{ $errors->first('contribution2') }}
                            </div>
                        @endif
                        </td>


                    </tr>

                    <tr>

                        <td><input type="text" name="link3" class="form-control" />
                            @if ($errors->has('link3'))
                            <div class="error alert-danger">
                                {{ $errors->first('link3') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="your_role3" class="form-control" />
                            @if ($errors->has('your_role3'))
                            <div class="error alert-danger">
                                {{ $errors->first('your_role3') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="skills3" class="form-control" />
                            @if ($errors->has('skills3'))
                            <div class="error alert-danger">
                                {{ $errors->first('skills3') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="contribution3" class="form-control" />
                            @if ($errors->has('contribution3'))
                            <div class="error alert-danger">
                                {{ $errors->first('contribution3') }}
                            </div>
                        @endif
                        </td>


                    </tr>

                </table>



                <h1 class="display-5 text-dark text-left col-md-12">Self Evaluation of your skills</h1>

                <table class="table table-bordered">

                    <tr>

                        <th>Select Skills in your Order</th>

                        <th>Your evaluation in the scale of 1 to 10.</th>

                        <th>Supporting Remarks</th>

                        <th>Years of experience</th>


                    </tr>

                    <tr>

                        <td> <select class="form-control {{ $errors->has('skill1') ? 'error' : '' }}" name="skill1">
                                <div id="skillsDropDown">
                                    <option selected disabled>Choose...</option>
                                    <option>Html</option>
                                    <option>Css</option>
                                    <option>Javacript</option>
                                    <option>Sql</option>
                                    <option>Dart</option>
                                    <option>Python</option>
                                </div>
                            </select>
                            <!-- Error -->
                            @if ($errors->has('skill1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('skill1') }}

                                </div>
                            @endif
                        </td>

                        <td><input type="text" name="eval1" class="form-control" />
                            @if ($errors->has('eval1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('eval1') }}

                                </div>
                            @endif
                        </td>

                        <td><input type="text" name="sremarks1" class="form-control" />
                            @if ($errors->has('sremarks1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('sremarks1') }}

                                </div>
                            @endif
                        </td>

                        <td><input type="text" name="exp1" class="form-control" />
                            @if ($errors->has('exp1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('exp1') }}

                                </div>
                            @endif
                        </td>

                    </tr>


                    <tr>

                        <td> <select class="form-control {{ $errors->has('skill2') ? 'error' : '' }}" name="skill2">
                                <div id="skillsDropDown">
                                    <option selected>Choose...</option>
                                    <option>Html</option>
                                    <option>Css</option>
                                    <option>Javacript</option>
                                    <option>Sql</option>
                                    <option>Dart</option>
                                    <option>Python</option>
                                </div>
                            </select>

                            @if ($errors->has('skill2'))
                            <div class="error alert-danger">
                                {{ $errors->first('skill2') }}

                            </div>
                        @endif

                        </td>

                        <td><input type="text" name="eval2" class="form-control" />
                            @if ($errors->has('eval2'))
                            <div class="error alert-danger">
                                {{ $errors->first('eval2') }}

                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="sremarks2" class="form-control" />
                            @if ($errors->has('sremarks2'))
                            <div class="error alert-danger">
                                {{ $errors->first('sremarks2') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="exp2" class="form-control" />
                            @if ($errors->has('exp2'))
                            <div class="error alert-danger">
                                {{ $errors->first('exp2') }}
                            </div>
                        @endif
                        </td>

                    </tr>

                    <tr>

                        <td> <select class="form-control {{ $errors->has('skill3') ? 'error' : '' }}" name="skill3">
                                <div id="skillsDropDown">
                                    <option selected>Choose...</option>
                                    <option>Html</option>
                                    <option>Css</option>
                                    <option>Javacript</option>
                                    <option>Sql</option>
                                    <option>Dart</option>
                                    <option>Python</option>
                                </div>
                            </select>
                            @if ($errors->has('skill3'))
                            <div class="error alert-danger">
                                {{ $errors->first('skill3') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="eval3" class="form-control" />
                            @if ($errors->has('eval3'))
                            <div class="error alert-danger">
                                {{ $errors->first('eval3') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="sremarks3" class="form-control" />
                            @if ($errors->has('sremarks3'))
                            <div class="error alert-danger">
                                {{ $errors->first('sremarks3') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="exp3" class="form-control" />
                            @if ($errors->has('exp3'))
                            <div class="error alert-danger">
                                {{ $errors->first('exp3') }}
                            </div>
                        @endif
                        </td>

                    </tr>

                    <tr>

                        <td> <select class="form-control {{ $errors->has('skill4') ? 'error' : '' }}" name="skill4">
                                <div id="skillsDropDown">
                                    <option selected>Choose...</option>
                                    <option>Html</option>
                                    <option>Css</option>
                                    <option>Javacript</option>
                                    <option>Sql</option>
                                    <option>Dart</option>
                                    <option>Python</option>
                                </div>
                            </select>
                            @if ($errors->has('skill4'))
                            <div class="error alert-danger">
                                {{ $errors->first('skill4') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="eval4" class="form-control" />
                            @if ($errors->has('eval4'))
                            <div class="error alert-danger">
                                {{ $errors->first('eval4') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="sremarks4" class="form-control" />
                            @if ($errors->has('sremarks4'))
                            <div class="error alert-danger">
                                {{ $errors->first('sremarks4') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="exp4" class="form-control" />
                            @if ($errors->has('exp4'))
                            <div class="error alert-danger">
                                {{ $errors->first('exp4') }}
                            </div>
                        @endif
                        </td>

                    </tr>

                    <tr>

                        <td> <select class="form-control {{ $errors->has('skill5') ? 'error' : '' }}" name="skill5">
                                <div id="skillsDropDown">
                                    <option disabled selected hidden>Choose...</option>
                                    <option>Html</option>
                                    <option>Css</option>
                                    <option>Javacript</option>
                                    <option>Sql</option>
                                    <option>Dart</option>
                                    <option>Python</option>
                                </div>
                            </select>
                            @if ($errors->has('skill5'))
                            <div class="error alert-danger">
                                {{ $errors->first('skill5') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="eval5" class="form-control" />
                            @if ($errors->has('eval5'))
                            <div class="error alert-danger">
                                {{ $errors->first('eval5') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="sremarks5" class="form-control" />
                            @if ($errors->has('sremarks5'))
                            <div class="error alert-danger">
                                {{ $errors->first('sremarks5') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="exp5" class="form-control" />
                            @if ($errors->has('exp5'))
                            <div class="error alert-danger">
                                {{ $errors->first('exp5') }}
                            </div>
                        @endif
                        </td>

                    </tr>



                </table>



                <h1 class="display-5 text-dark text-left col-md-12">Additional skills</h1>

                <table class="table table-bordered">

                    <tr>

                        <th>Select Skills in your Order</th>

                        <th>Your evaluation in the scale of 1 to 10.</th>

                        <th>Supporting Remarks</th>

                        <th>Years of experience</th>


                    </tr>

                    <tr>

                        <td> <input type="text" class="form-control {{ $errors->has('add_skill1') ? 'error' : '' }}"
                                name="add_skill1">

                                @if ($errors->has('add_skill1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('add_skill1') }}
                                </div>
                            @endif

                        </td>

                        <td><input type="text" name="add_eval1" class="form-control" />
                            @if ($errors->has('add_eval1'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_eval1') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="add_sremarks1" class="form-control" />
                            @if ($errors->has('add_sremarks1'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_sremarks1') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="add_exp1" class="form-control" />
                            @if ($errors->has('add_exp1'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_exp1') }}
                            </div>
                        @endif
                        </td>

                    </tr>


                    <tr>

                        <td> <input type="text" class="form-control {{ $errors->has('add_skill2') ? 'error' : '' }}"
                                name="add_skill2">
                                @if ($errors->has('add_skill2'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_skill2') }}
                            </div>
                        @endif

                        </td>

                        <td><input type="text" name="add_eval2" class="form-control" />
                            @if ($errors->has('add_eval2'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_eval2') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="add_sremarks2" class="form-control" />
                            @if ($errors->has('add_sremarks2'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_sremarks2') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="add_exp2" class="form-control" />
                            @if ($errors->has('add_exp2'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_exp2') }}
                            </div>
                        @endif
                        </td>

                    </tr>

                    <tr>


                        <td> <input type="text" class="form-control {{ $errors->has('add_skill3') ? 'error' : '' }}"
                                name="add_skill3">

                                @if ($errors->has('add_skill3'))
                                <div class="error alert-danger">
                                    {{ $errors->first('add_skill3') }}
                                </div>
                            @endif

                        </td>

                        <td><input type="text" name="add_eval3" class="form-control" />
                            @if ($errors->has('add_eval3'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_eval3') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="add_sremarks3" class="form-control" />
                            @if ($errors->has('add_sremarks3'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_sremarks3') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="add_exp3" class="form-control" />
                            @if ($errors->has('add_exp3'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_exp3') }}
                            </div>
                        @endif
                        </td>

                    </tr>

                    <tr>

                        <td> <input type="text" class="form-control {{ $errors->has('add_skill4') ? 'error' : '' }}"
                                name="add_skill4">
                                @if ($errors->has('add_skill4'))
                                <div class="error alert-danger">
                                    {{ $errors->first('add_skill4') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" name="add_eval4" class="form-control" />
                            @if ($errors->has('add_eval4'))
                                <div class="error alert-danger">
                                    {{ $errors->first('add_eval4') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" name="add_sremarks4" class="form-control" />
                            @if ($errors->has('add_sremarks4'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_sremarks4') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="add_exp4" class="form-control" />
                            @if ($errors->has('add_exp4'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_exp4') }}
                            </div>
                        @endif
                        </td>

                    </tr>

                    <tr>

                        <td> <input type="text" class="form-control {{ $errors->has('add_skill5') ? 'error' : '' }}"
                                name="add_skill5">
                                @if ($errors->has('add_skill5'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_skill5') }}
                            </div>
                        @endif

                        </td>

                        <td><input type="text" name="add_eval5" class="form-control" />
                            @if ($errors->has('add_eval5'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_eval5') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="add_sremarks5" class="form-control" />
                            @if ($errors->has('add_sremarks5'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_sremarks5') }}
                            </div>
                        @endif
                        </td>

                        <td><input type="text" name="add_exp5" class="form-control" />
                            @if ($errors->has('add_exp5'))
                            <div class="error alert-danger">
                                {{ $errors->first('add_exp5') }}
                            </div>
                        @endif
                    </td>

                    </tr>



                </table>


                <label class="col-md-12">Special Category Information (if any, optional to share)</label>


                <div class="radio col-md-4">
                    <label><input type="radio" name="spl_category" value="Differently Abled">Differently Abled</label>
                </div>
                <div class="radio col-md-4">
                    <label><input type="radio" name="spl_category" value="From Martyr Family">From Martyr Family</label>
                </div>
                <div class="radio col-md-4">
                    <label><input type="radio" name="spl_category" value="Single/No Parent">Single/No Parent</label>
                </div>

                <div class="form-group col-md-6">
                    <label>Special Category details</label>
                    <input type="text" class="form-control {{ $errors->has('spl_category_details') ? 'error' : '' }}"
                        name="sp_details">
                        @if ($errors->has('spl_category_details'))
                        <div class="error alert-danger">
                            {{ $errors->first('spl_category_details') }}
                        </div>
                    @endif
                </div>


                <h1 class="display-5 text-dark text-left col-md-12">Contact details for reference</h1>

                <table class="table table-bordered">

                    <tr>

                        <th>Name</th>

                        <th>Mobile Number.</th>

                        <th>Occupation</th>

                        <th>Relation</th>


                    </tr>



                    <tr>

                        <td><input type="text" class="form-control {{ $errors->has('ref_name') ? 'error' : '' }}"
                                name="ref_name">

                            @if ($errors->has('ref_name'))
                                <div class="error alert-danger">
                                    {{ $errors->first('ref_name') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" class="form-control {{ $errors->has('ref_number') ? 'error' : '' }}"
                                name="ref_number">

                            @if ($errors->has('ref_number'))
                                <div class="error alert-danger">
                                    {{ $errors->first('ref_number') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" class="form-control {{ $errors->has('ref_occupation') ? 'error' : '' }}"
                                name="ref_occupation">

                            @if ($errors->has('ref_occupation'))
                                <div class="error alert-danger">
                                    {{ $errors->first('ref_occupation') }}
                                </div>
                            @endif
                        </td>

                        <td> <select class="form-control {{ $errors->has('ref_relation') ? 'error' : '' }}"
                                name="ref_relation">
                                <div id="skillsDropDown">
                                    <option selected disabled>Choose...</option>
                                    <option>Relative</option>
                                    <option>Childhood Friend</option>
                                    <option>Friend</option>
                                    <option>Colleague</option>
                                    <option>Known Person</option>
                                </div>
                            </select>
                            <!-- Error -->
                            @if ($errors->has('ref_relation'))
                                <div class="error alert-danger">
                                    {{ $errors->first('ref_relation') }}

                                </div>
                            @endif
                        </td>

                    </tr>


                    <tr>

                        <td><input type="text" class="form-control {{ $errors->has('ref_name1') ? 'error' : '' }}"
                                name="ref_name1">

                            @if ($errors->has('ref_name1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('ref_name1') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" class="form-control {{ $errors->has('ref_number1') ? 'error' : '' }}"
                                name="ref_number1">

                            @if ($errors->has('ref_number1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('ref_number1') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" class="form-control {{ $errors->has('ref_occupation1') ? 'error' : '' }}"
                                name="ref_occupation1">

                            @if ($errors->has('ref_occupation1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('ref_occupation1') }}
                                </div>
                            @endif
                        </td>

                        <td> <select class="form-control {{ $errors->has('ref_relation1') ? 'error' : '' }}"
                                name="ref_relation1">
                                <div id="skillsDropDown">
                                    <option selected disabled>Choose...</option>
                                    <option>Relative</option>
                                    <option>Childhood Friend</option>
                                    <option>Friend</option>
                                    <option>Colleague</option>
                                    <option>Known Person</option>
                                </div>
                            </select>
                            <!-- Error -->
                            @if ($errors->has('ref_relation1'))
                                <div class="error alert-danger">
                                    {{ $errors->first('ref_relation1') }}

                                </div>
                            @endif
                        </td>

                    </tr>


                    <tr>

                        <td><input type="text" class="form-control {{ $errors->has('ref_name2') ? 'error' : '' }}"
                                name="ref_name2">

                            @if ($errors->has('ref_name2'))
                                <div class="error alert-danger">
                                    {{ $errors->first('ref_name2') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" class="form-control {{ $errors->has('ref_number2') ? 'error' : '' }}"
                                name="ref_number2">

                            @if ($errors->has('ref_number2'))
                                <div class="error alert-danger">
                                    {{ $errors->first('ref_number2') }}
                                </div>
                            @endif
                        </td>

                        <td><input type="text" class="form-control {{ $errors->has('ref_occupation2') ? 'error' : '' }}"
                                name="ref_occupation2">

                            @if ($errors->has('ref_occupation2'))
                                <div class="error alert-danger">
                                    {{ $errors->first('ref_occupation2') }}
                                </div>
                            @endif
                        </td>

                        <td> <select class="form-control {{ $errors->has('ref_relation2') ? 'error' : '' }}"
                                name="ref_relation2">
                                <div id="skillsDropDown">
                                    <option selected disabled>Choose...</option>
                                    <option>Relative</option>
                                    <option>Childhood Friend</option>
                                    <option>Friend</option>
                                    <option>Colleague</option>
                                    <option>Known Person</option>
                                </div>
                            </select>
                            <!-- Error -->
                            @if ($errors->has('ref_relation2'))
                                <div class="error alert-danger">
                                    {{ $errors->first('ref_relation2') }}

                                </div>
                            @endif
                        </td>

                    </tr>


                </table>

                <div class="form-group col-md-4">
                    <label>Available start date</label>
                    <input type="date" class="form-control {{ $errors->has('avl_date') ? 'error' : '' }}" name="avl_date">

                    @if ($errors->has('avl_date'))
                        <div class="error alert-danger">
                            {{ $errors->first('avl_date') }}
                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    <label>Linkedin Profile Link</label>
                    <input type="text" class="form-control {{ $errors->has('linkedin') ? 'error' : '' }}" name="linkedin">

                    @if ($errors->has('linkedin'))
                        <div class="error alert-danger">
                            {{ $errors->first('linkedin') }}
                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    <label>Facebook Profile</label>
                    <input type="text" class="form-control {{ $errors->has('facebook') ? 'error' : '' }}" name="facebook">

                    @if ($errors->has('facebook'))
                        <div class="error alert-danger">
                            {{ $errors->first('facebook') }}
                        </div>
                    @endif
                </div>

                <input type="submit" value="Submit" class="btn btn-dark btn-block">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>

    </div>

    </form>






    <script type="text/javascript">
        var i = 0;

        $("#add").click(function() {

            ++i;

            $("#dynamicTable").append('<tr><td><input type="text" name="addmore[' + i +
                '][degree]"  class="form-control" required/></td><td><input type="text" name="addmore[' +
                i +
                '][institute]"  class="form-control" required/></td><td><input type="text" name="addmore[' +
                i +
                '][year]"  class="form-control" required/></td><td><input type="text" name="addmore[' +
                i +
                '][aggregate]"  class="form-control" required/></td><td><input type="text" name="addmore[' +
                i +
                '][remarks]"  class="form-control" required/></td><td><button type="button" class="btn btn-danger remove-tr">-</button></td></tr>'
            );

        });

        $(document).on('click', '.remove-tr', function() {

            $(this).parents('tr').remove();

        });

    </script>

    </div>
@endsection
