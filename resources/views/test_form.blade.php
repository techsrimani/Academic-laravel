@extends('layouts.app')
@section('content')

    <style>
        table {
            table-layout: fixed;
            display: block;
            overflow: scroll;
            /* Scrollbar are always visible */
            overflow: auto;
            /* Scrollbar is displayed as it's needed */
        }

    </style>
    <div class="container  bg-white shadow  p-3 mb-5">
        <h1 class="display-1 text-dark text-center">Apply for Job</h1>

        <form id="job_form" method="post" enctype="multipart/form-data" action="{{ route('test-form') }}">

            @csrf

            <div class="form-row">

                <div class="form-group col-md-12">
                    <label>Select Role You are applying for</label>
                    <select class="form-control {{ $errors->has('position') ? 'error' : '' }}" name="position">

                        <option selected disabled>choose ...</option>
                        <option>Full Stack Web Developer</option>
                        <option>Web Developer</option>
                        <option>Android App Developer</option>
                        <option>Ios App Developer</option>
                        <option>DevOPS and MS Azure Admin</option>
                    </select>
                    <div class="text-danger error" data-error="position"></div>
                </div>

                <div class="form-group col-md-6">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="first_name">
                    <div class="text-danger error" data-error="first_name"></div>
                </div>

                <div class="form-group col-md-6">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="last_name">
                    <div class="text-danger error" data-error="last_name"></div>
                </div>

                <div class="form-group col-md-6">
                    <label>Passpost size Photo</label>
                    <input type="file" class="form-control" name="photo" />
                    <div class="text-danger error" data-error="photo"></div>
                </div>

                <div class="form-group col-md-6">
                    <label>Date of Birth</label>
                    <input type="date" class="form-control" name="dob">
                    <div class="text-danger error" data-error="dob"></div>
                </div>

                <div class="form-group col-md-6">
                    <label>Age</label>
                    <input type="text" class="form-control" name="age">
                    <div class="text-danger error" data-error="age"></div>
                </div>

                <div class="form-group col-md-6">
                    <label>Sex</label>
                    <select class="form-control" name="sex">
                        <option selected disabled>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                    </select>
                    <div class="text-danger error" data-error="sex"></div>
                </div>

                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                    <div class="text-danger error" data-error="email"></div>
                </div>

                <div class="form-group col-md-6">
                    <label>Alternate Email</label>
                    <input type="email" class="form-control" name="alt_email">
                    <div class="text-danger error" data-error="alt_email"></div>
                </div>

                <div class="form-group col-md-6">
                    <label>Mobile Number*</label>
                    <input type="text" class="form-control" name="phone">
                    <div class="text-danger error" data-error="phone"></div>

                </div>

                <div class="form-group col-md-6">
                    <label>Alternate Mobile Number</label>
                    <input type="text" class="form-control" name="alt_phone">
                    <div class="text-danger error" data-error="alt_phone"></div>
                </div>

                <h1 class="display-5 text-dark text-left col-md-12">Parent details</h1>

                <div class="form-group col-md-4">
                    <label>Father Name</label>
                    <input type="text" class="form-control" name="father_name">
                    <div class="text-danger error" data-error="father_name"></div>
                </div>

                <div class="form-group col-md-4">
                    <label>Father Ph No</label>
                    <input type="text" class="form-control" name="father_phone">
                    <div class="text-danger error" data-error="father_phone"></div>
                </div>

                <div class="form-group col-md-4">
                    <label>Father Occupation</label>
                    <input type="text" class="form-control" name="father_occupation">
                    <div class="text-danger error" data-error="father_occupation"></div>
                </div>

                <div class="form-group col-md-4">
                    <label>Mother Name</label>
                    <input type="text" class="form-control" name="mother_name">
                    <div class="text-danger error" data-error="mother_name"></div>
                </div>


                <div class="form-group col-md-4">
                    <label>Mother Ph No</label>
                    <input type="text" class="form-control" name="mother_phone">
                    <div class="text-danger error" data-error="mother_phone"></div>
                </div>

                <div class="form-group col-md-4">
                    <label>Mother Occupation</label>
                    <input type="text" class="form-control" name="mother_occupation">
                    <div class="text-danger error" data-error="mother_occupation"></div>
                </div>

                <div class="form-group col-md-4">
                    <label>Gaurdian Name</label>
                    <input type="text" class="form-control" name="gaurdian_name">
                    <div class="text-danger error" data-error="gaurdian_name"></div>
                </div>


                <div class="form-group col-md-4">
                    <label>Gaurdian Ph No</label>
                    <input type="text" class="form-control" name="gaurdian_phone">
                    <div class="text-danger error" data-error="gaurdian_phone"></div>
                </div>

                <div class="form-group col-md-4">
                    <label>Gaurdian Occupation</label>
                    <input type="text" class="form-control " name="gaurdain_occupation">
                    <div class="text-danger error" data-error="gaurdian_occupation"></div>
                </div>

                <h1 class="display-5 text-dark text-left col-md-12">Permanent Address</h1>

                <div class="form-group col-md-6">
                    <label>Address Line1*</label>
                    <input type="text" class="form-control" name="address_l1">
                    <div class="text-danger error" data-error="address_l1"></div>

                </div>

                <div class="form-group col-md-6">
                    <label>Address Line2</label>
                    <input type="text" class="form-control" name="address_l2">
                    <div class="text-danger error" data-error="address_l2"></div>

                </div>

                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control" name="city">
                    <div class="text-danger error" data-error="city"></div>

                </div>

                <div class="form-group col-md-6">
                    <label>
                        State / Province
                    </label>
                    <input type="text" class="form-control" name="state">
                    <div class="text-danger error" data-error="state"></div>

                </div>

                <div class="form-group col-md-6">
                    <label>
                        Postal / Zip Code
                    </label>
                    <input type="text" class="form-control" name="pincode">
                    <div class="text-danger error" data-error="pincode"></div>

                </div>

                <div class="form-group col-md-6">
                    <label>Country</label>
                    <select class="form-control" name="country">
                        <option selected disabled>Choose...</option>
                        <option>India</option>
                        <option>USA</option>
                        <option>UK</option>
                        <option>New Zealand</option>
                        <option>UAE</option>
                        <option>Australia</option>
                    </select>
                    <div class="text-danger error" data-error="country"></div>
                </div>

                <div class="form-check col-md-12 ml-3 mt-3">
                    <input type="checkbox" class="form-check-input" name="sameaddress" onclick="fillAddress(this.form)">
                    <label class="form-check-label"><strong>Check this box if both present and permanent address are
                            same.</strong></label>
                </div>


                <h1 class="display-5 text-dark text-left col-md-12">Present Address</h1>

                <div class="form-group col-md-6">
                    <label>Address Line1*</label>
                    <input type="text" class="form-control" name="present_address_l1">
                    <div class="text-danger error" data-error="present_address_l1"></div>

                </div>

                <div class="form-group col-md-6">
                    <label>Address Line2</label>
                    <input type="text" class="form-control" name="present_address_l2">
                    <div class="text-danger error" data-error="present_address_l2"></div>
                </div>

                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control" name="present_city">
                    <div class="text-danger error" data-error="present_city"></div>

                </div>

                <div class="form-group col-md-6">
                    <label>
                        State / Province
                    </label>
                    <input type="text" class="form-control" name="present_state">
                    <div class="text-danger error" data-error="present_state"></div>

                </div>

                <div class="form-group col-md-6">
                    <label>
                        Postal / Zip Code
                    </label>
                    <input type="text" class="form-control" name="present_pincode">
                    <div class="text-danger error" data-error="present_pincode"></div>

                </div>

                <div class="form-group col-md-6">
                    <label>Country</label>
                    <select class="form-control" name="present_country">
                        <option selected disabled>Choose...</option>
                        <option>India</option>
                        <option>USA</option>
                        <option>UK</option>
                        <option>New Zealand</option>
                        <option>UAE</option>
                        <option>Australia</option>
                    </select>
                    <div class="text-danger error" data-error="present_country"></div>
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
                <div class="text-danger error col-md-12" data-error="employee_status"></div>

                <div class="form-group col-md-4">
                    <label>Current CTC in number</label>
                    <input type="text" class="form-control" name="current_ctc">
                    <div class="text-danger error" data-error="current_ctc"></div>

                </div>

                <div class="form-group col-md-4">
                    <label>Expected CTC in number</label>
                    <input type="text" class="form-control" name="expected_ctc">
                    <div class="text-danger error" data-error="expected_ctc"></div>
                </div>

                <div class="form-group col-md-4">
                    <label>Number of years experience in coding</label>
                    <input type="text" class="form-control" name="experience">
                    <div class="text-danger error" data-error="experience"></div>
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
                            <div class="text-danger error" data-error="company1"></div>

                        </td>

                        <td><input type="date" name="from1" class="form-control" />
                            <div class="text-danger error" data-error="from1"></div>

                        </td>

                        <td><input type="date" name="to1" class="form-control" />
                            <div class="text-danger error" data-error="to1"></div>

                        </td>

                        <td><input type="text" name="accomplishments1" class="form-control" />
                            <div class="text-danger error" data-error="accomplishments1"></div>

                        </td>

                        <td><input type="text" name="role1" class="form-control" />
                            <div class="text-danger error" data-error="role1"></div>

                        </td>


                    </tr>

                    <tr>

                        <td><input type="text" name="company2" class="form-control" />
                            <div class="text-danger error" data-error="company2"></div>

                        </td>

                        <td><input type="date" name="from2" class="form-control" />
                            <div class="text-danger error" data-error="from2"></div>

                        </td>

                        <td><input type="date" name="to2" class="form-control" />
                            <div class="text-danger error" data-error="to2"></div>

                        </td>

                        <td><input type="text" name="accomplishments2" class="form-control" />
                            <div class="text-danger error" data-error="accomplishments2"></div>

                        </td>

                        <td><input type="text" name="role2" class="form-control" />
                            <div class="text-danger error" data-error="role2"></div>

                        </td>

                    </tr>

                    <tr>

                        <td><input type="text" name="company3" class="form-control" />
                            <div class="text-danger error" data-error="company3"></div>

                        </td>

                        <td><input type="date" name="from3" class="form-control" />
                            <div class="text-danger error" data-error="from3"></div>

                        </td>

                        <td><input type="date" name="to3" class="form-control" />
                            <div class="text-danger error" data-error="to3"></div>

                        </td>


                        <td><input type="text" name="accomplishments3" class="form-control" />
                            <div class="text-danger error" data-error="accomplishments3"></div>

                        </td>

                        <td><input type="text" name="role3" class="form-control" />
                            <div class="text-danger error" data-error="role3"></div>

                        </td>

                    </tr>

                    <tr>

                        <td><input type="text" name="company4" class="form-control" />
                            <div class="text-danger error" data-error="company5"></div>

                        </td>

                        <td><input type="date" name="from4" class="form-control" />
                            <div class="text-danger error" data-error="from4"></div>

                        </td>

                        <td><input type="date" name="to4" class="form-control" />
                            <div class="text-danger error" data-error="to4"></div>

                        </td>

                        <td><input type="text" name="accomplishments4" class="form-control" />
                            <div class="text-danger error" data-error="accomplishments4"></div>

                        </td>

                        <td><input type="text" name="role4" class="form-control" />
                            <div class="text-danger error" data-error="role4"></div>

                        </td>

                    </tr>

                    <tr>

                        <td><input type="text" name="company5" class="form-control" />
                            <div class="text-danger error" data-error="company5"></div>

                        </td>

                        <td><input type="date" name="from5" class="form-control" />
                            <div class="text-danger error" data-error="from5"></div>

                        </td>

                        <td><input type="date" name="to5" class="form-control" />
                            <div class="text-danger error" data-error="to5"></div>

                        </td>

                        <td><input type="text" name="accomplishments5" class="form-control" />
                            <div class="text-danger error" data-error="accomplishments5"></div>

                        </td>

                        <td><input type="text" name="role5" class="form-control" />
                            <div class="text-danger error" data-error="role5"></div>

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
                            <div class="text-danger error" data-error="link1"></div>

                        </td>

                        <td><input type="text" name="your_role1" class="form-control" />
                            <div class="text-danger error" data-error="your_role1"></div>

                        </td>

                        <td><input type="text" name="skills1" class="form-control" />
                            <div class="text-danger error" data-error="skills1"></div>

                        </td>

                        <td><input type="text" name="contribution1" class="form-control" />
                            <div class="text-danger error" data-error="contribution1"></div>

                        </td>

                    </tr>

                    <tr>

                        <td><input type="text" name="link2" class="form-control" />
                            <div class="text-danger error" data-error="link2"></div>

                        </td>

                        <td><input type="text" name="your_role2" class="form-control" />
                            <div class="text-danger error" data-error="your_role2"></div>

                        </td>

                        <td><input type="text" name="skills2" class="form-control" />
                            <div class="text-danger error" data-error="skills2"></div>

                        </td>

                        <td><input type="text" name="contribution2" class="form-control" />
                            <div class="text-danger error" data-error="contribution2"></div>

                        </td>


                    </tr>

                    <tr>

                        <td><input type="text" name="link3" class="form-control" />
                            <div class="text-danger error" data-error="link2"></div>

                        </td>

                        <td><input type="text" name="your_role3" class="form-control" />
                            <div class="text-danger error" data-error="your_role3"></div>

                        </td>

                        <td><input type="text" name="skills3" class="form-control" />
                            <div class="text-danger error" data-error="skills3"></div>

                        </td>

                        <td><input type="text" name="contribution3" class="form-control" />
                            <div class="text-danger error" data-error="contribution3"></div>

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

                        <td> <select class="form-control" name="skill1">
                                <option selected disabled>Choose...</option>
                                <option>HTML</option>
                                <option>CSS</option>
                                <option>JAVASCRIPT</option>
                                <option>PHP/MySQL</option>
                                <option>Frontend Web Design</option>
                                <option>Web DevOPS</option>
                                <option>Dart</option>
                                <option>Flutter</option>
                                <option>Frontend Android Design</option>
                                <option>Backend Android App integration</option>
                                <option>Swift UI</option>
                                <option>Xcode</option>
                                <option>Frontend Ios App Design</option>
                                <option>Ms Azure Resorce Management</option>
                                <option>Ms Azure Hosting</option>
                                <option>Ms Azure DevOPS</option>
                                <option>Full Stack Web Developer</option>
                                <option>Full Stack Ios Developer</option>
                                <option>Full Stack Android Developer</option>
                                <option>Full Stack DevOPS Ms Azure Administrator</option>
                                <option>Web RTC</option>
                                <option>Angular</option>
                                <option>Laravel</option>

                            </select>
                            <div class="text-danger error" data-error="skill1"></div>

                        </td>

                        <td><input type="text" name="eval1" class="form-control" />
                            <div class="text-danger error" data-error="eval1"></div>

                        </td>

                        <td><input type="text" name="sremarks1" class="form-control" />
                            <div class="text-danger error" data-error="sremarks1"></div>

                        </td>

                        <td><input type="text" name="exp1" class="form-control" />
                            <div class="text-danger error" data-error="exp1"></div>

                        </td>

                    </tr>


                    <tr>

                        <td> <select class="form-control" name="skill2">
                                <option selected disabled>Choose...</option>
                                <option>HTML</option>
                                <option>CSS</option>
                                <option>JAVASCRIPT</option>
                                <option>PHP/MySQL</option>
                                <option>Frontend Web Design</option>
                                <option>Web DevOPS</option>
                                <option>Dart</option>
                                <option>Flutter</option>
                                <option>Frontend Android Design</option>
                                <option>Backend Android App integration</option>
                                <option>Swift UI</option>
                                <option>Xcode</option>
                                <option>Frontend Ios App Design</option>
                                <option>Ms Azure Resorce Management</option>
                                <option>Ms Azure Hosting</option>
                                <option>Ms Azure DevOPS</option>
                                <option>Full Stack Web Developer</option>
                                <option>Full Stack Ios Developer</option>
                                <option>Full Stack Android Developer</option>
                                <option>Full Stack DevOPS Ms Azure Administrator</option>
                                <option>Web RTC</option>
                                <option>Angular</option>
                                <option>Laravel</option>

                            </select>
                            <div class="text-danger error" data-error="skill2"></div>

                        </td>

                        <td><input type="text" name="eval2" class="form-control" />
                            <div class="text-danger error" data-error="eval2"></div>

                        </td>

                        <td><input type="text" name="sremarks2" class="form-control" />
                            <div class="text-danger error" data-error="sremarks2"></div>

                        </td>

                        <td><input type="text" name="exp2" class="form-control" />
                            <div class="text-danger error" data-error="exp2"></div>

                        </td>

                    </tr>

                    <tr>

                        <td> <select class="form-control" name="skill3">
                                <option selected disabled>Choose...</option>
                                <option>HTML</option>
                                <option>CSS</option>
                                <option>JAVASCRIPT</option>
                                <option>PHP/MySQL</option>
                                <option>Frontend Web Design</option>
                                <option>Web DevOPS</option>
                                <option>Dart</option>
                                <option>Flutter</option>
                                <option>Frontend Android Design</option>
                                <option>Backend Android App integration</option>
                                <option>Swift UI</option>
                                <option>Xcode</option>
                                <option>Frontend Ios App Design</option>
                                <option>Ms Azure Resorce Management</option>
                                <option>Ms Azure Hosting</option>
                                <option>Ms Azure DevOPS</option>
                                <option>Full Stack Web Developer</option>
                                <option>Full Stack Ios Developer</option>
                                <option>Full Stack Android Developer</option>
                                <option>Full Stack DevOPS Ms Azure Administrator</option>
                                <option>Web RTC</option>
                                <option>Angular</option>
                                <option>Laravel</option>

                            </select>
                            <div class="text-danger error" data-error="skill3"></div>

                        </td>

                        <td><input type="text" name="eval3" class="form-control" />
                            <div class="text-danger error" data-error="eval3"></div>

                        </td>

                        <td><input type="text" name="sremarks3" class="form-control" />
                            <div class="text-danger error" data-error="sremarks3"></div>

                        </td>

                        <td><input type="text" name="exp3" class="form-control" />
                            <div class="text-danger error" data-error="exp3"></div>

                        </td>

                    </tr>

                    <tr>

                        <td> <select class="form-control" name="skill4">
                                <option selected disabled>Choose...</option>
                                <option>HTML</option>
                                <option>CSS</option>
                                <option>JAVASCRIPT</option>
                                <option>PHP/MySQL</option>
                                <option>Frontend Web Design</option>
                                <option>Web DevOPS</option>
                                <option>Dart</option>
                                <option>Flutter</option>
                                <option>Frontend Android Design</option>
                                <option>Backend Android App integration</option>
                                <option>Swift UI</option>
                                <option>Xcode</option>
                                <option>Frontend Ios App Design</option>
                                <option>Ms Azure Resorce Management</option>
                                <option>Ms Azure Hosting</option>
                                <option>Ms Azure DevOPS</option>
                                <option>Full Stack Web Developer</option>
                                <option>Full Stack Ios Developer</option>
                                <option>Full Stack Android Developer</option>
                                <option>Full Stack DevOPS Ms Azure Administrator</option>
                                <option>Web RTC</option>
                                <option>Angular</option>
                                <option>Laravel</option>

                            </select>
                            <div class="text-danger error" data-error="skill4"></div>

                        </td>

                        <td><input type="text" name="eval4" class="form-control" />
                            <div class="text-danger error" data-error="eval4"></div>

                        </td>

                        <td><input type="text" name="sremarks4" class="form-control" />
                            <div class="text-danger error" data-error="sremarks"></div>

                        </td>

                        <td><input type="text" name="exp4" class="form-control" />
                            <div class="text-danger error" data-error="exp4"></div>

                        </td>

                    </tr>

                    <tr>

                        <td> <select class="form-control" name="skill5">
                                <option selected disabled>Choose...</option>
                                <option>HTML</option>
                                <option>CSS</option>
                                <option>JAVASCRIPT</option>
                                <option>PHP/MySQL</option>
                                <option>Frontend Web Design</option>
                                <option>Web DevOPS</option>
                                <option>Dart</option>
                                <option>Flutter</option>
                                <option>Frontend Android Design</option>
                                <option>Backend Android App integration</option>
                                <option>Swift UI</option>
                                <option>Xcode</option>
                                <option>Frontend Ios App Design</option>
                                <option>Ms Azure Resorce Management</option>
                                <option>Ms Azure Hosting</option>
                                <option>Ms Azure DevOPS</option>
                                <option>Full Stack Web Developer</option>
                                <option>Full Stack Ios Developer</option>
                                <option>Full Stack Android Developer</option>
                                <option>Full Stack DevOPS Ms Azure Administrator</option>
                                <option>Web RTC</option>
                                <option>Angular</option>
                                <option>Laravel</option>

                            </select>
                            <div class="text-danger error" data-error="skill5"></div>

                        </td>

                        <td><input type="text" name="eval5" class="form-control" />
                            <div class="text-danger error" data-error="eval5"></div>

                        </td>

                        <td><input type="text" name="sremarks5" class="form-control" />
                            <div class="text-danger error" data-error="sremarks5"></div>

                        </td>

                        <td><input type="text" name="exp5" class="form-control" />
                            <div class="text-danger error" data-error="exp5"></div>

                        </td>

                    </tr>


                    <tr>

                        <td> <select class="form-control" name="skill6">
                                <option selected disabled>Choose...</option>
                                <option>HTML</option>
                                <option>CSS</option>
                                <option>JAVASCRIPT</option>
                                <option>PHP/MySQL</option>
                                <option>Frontend Web Design</option>
                                <option>Web DevOPS</option>
                                <option>Dart</option>
                                <option>Flutter</option>
                                <option>Frontend Android Design</option>
                                <option>Backend Android App integration</option>
                                <option>Swift UI</option>
                                <option>Xcode</option>
                                <option>Frontend Ios App Design</option>
                                <option>Ms Azure Resorce Management</option>
                                <option>Ms Azure Hosting</option>
                                <option>Ms Azure DevOPS</option>
                                <option>Full Stack Web Developer</option>
                                <option>Full Stack Ios Developer</option>
                                <option>Full Stack Android Developer</option>
                                <option>Full Stack DevOPS Ms Azure Administrator</option>
                                <option>Web RTC</option>
                                <option>Angular</option>
                                <option>Laravel</option>

                            </select>

                            <div class="text-danger error" data-error="skill6"></div>

                        </td>

                        <td><input type="text" name="eval6" class="form-control" />
                            <div class="text-danger error" data-error="eval6"></div>

                        </td>

                        <td><input type="text" name="sremarks6" class="form-control" />
                            <div class="text-danger error" data-error="sremarks6"></div>

                        </td>

                        <td><input type="text" name="exp6" class="form-control" />
                            <div class="text-danger error" data-error="exp6"></div>

                        </td>

                    </tr>


                    <tr>

                        <td> <select class="form-control" name="skill7">
                                <option selected disabled>Choose...</option>
                                <option>HTML</option>
                                <option>CSS</option>
                                <option>JAVASCRIPT</option>
                                <option>PHP/MySQL</option>
                                <option>Frontend Web Design</option>
                                <option>Web DevOPS</option>
                                <option>Dart</option>
                                <option>Flutter</option>
                                <option>Frontend Android Design</option>
                                <option>Backend Android App integration</option>
                                <option>Swift UI</option>
                                <option>Xcode</option>
                                <option>Frontend Ios App Design</option>
                                <option>Ms Azure Resorce Management</option>
                                <option>Ms Azure Hosting</option>
                                <option>Ms Azure DevOPS</option>
                                <option>Full Stack Web Developer</option>
                                <option>Full Stack Ios Developer</option>
                                <option>Full Stack Android Developer</option>
                                <option>Full Stack DevOPS Ms Azure Administrator</option>
                                <option>Web RTC</option>
                                <option>Angular</option>
                                <option>Laravel</option>

                            </select>
                            <div class="text-danger error" data-error="skill7"></div>

                        </td>

                        <td><input type="text" name="eval7" class="form-control" />
                            <div class="text-danger error" data-error="eval7"></div>

                        </td>

                        <td><input type="text" name="sremarks7" class="form-control" />
                            <div class="text-danger error" data-error="sremarks7"></div>

                        </td>

                        <td><input type="text" name="exp7" class="form-control" />
                            <div class="text-danger error" data-error="exp7"></div>

                        </td>

                    </tr>

                    <tr>

                        <td> <select class="form-control" name="skill8">
                                <option selected disabled>Choose...</option>
                                <option>HTML</option>
                                <option>CSS</option>
                                <option>JAVASCRIPT</option>
                                <option>PHP/MySQL</option>
                                <option>Frontend Web Design</option>
                                <option>Web DevOPS</option>
                                <option>Dart</option>
                                <option>Flutter</option>
                                <option>Frontend Android Design</option>
                                <option>Backend Android App integration</option>
                                <option>Swift UI</option>
                                <option>Xcode</option>
                                <option>Frontend Ios App Design</option>
                                <option>Ms Azure Resorce Management</option>
                                <option>Ms Azure Hosting</option>
                                <option>Ms Azure DevOPS</option>
                                <option>Full Stack Web Developer</option>
                                <option>Full Stack Ios Developer</option>
                                <option>Full Stack Android Developer</option>
                                <option>Full Stack DevOPS Ms Azure Administrator</option>
                                <option>Web RTC</option>
                                <option>Angular</option>
                                <option>Laravel</option>

                            </select>
                            <div class="text-danger error" data-error="skill8"></div>

                        </td>

                        <td><input type="text" name="eval8" class="form-control" />
                            <div class="text-danger error" data-error="eval8"></div>

                        </td>

                        <td><input type="text" name="sremarks8" class="form-control" />
                            <div class="text-danger error" data-error="sremarks8"></div>

                        </td>

                        <td><input type="text" name="exp8" class="form-control" />
                            <div class="text-danger error" data-error="exp8"></div>

                        </td>

                    </tr>

                    <tr>

                        <td> <select class="form-control" name="skill9">
                                <option selected disabled>Choose...</option>
                                <option>HTML</option>
                                <option>CSS</option>
                                <option>JAVASCRIPT</option>
                                <option>PHP/MySQL</option>
                                <option>Frontend Web Design</option>
                                <option>Web DevOPS</option>
                                <option>Dart</option>
                                <option>Flutter</option>
                                <option>Frontend Android Design</option>
                                <option>Backend Android App integration</option>
                                <option>Swift UI</option>
                                <option>Xcode</option>
                                <option>Frontend Ios App Design</option>
                                <option>Ms Azure Resorce Management</option>
                                <option>Ms Azure Hosting</option>
                                <option>Ms Azure DevOPS</option>
                                <option>Full Stack Web Developer</option>
                                <option>Full Stack Ios Developer</option>
                                <option>Full Stack Android Developer</option>
                                <option>Full Stack DevOPS Ms Azure Administrator</option>
                                <option>Web RTC</option>
                                <option>Angular</option>
                                <option>Laravel</option>

                            </select>
                            <div class="text-danger error" data-error="skill9"></div>

                        </td>

                        <td><input type="text" name="eval9" class="form-control" />
                            <div class="text-danger error" data-error="eval9"></div>

                        </td>

                        <td><input type="text" name="sremarks9" class="form-control" />
                            <div class="text-danger error" data-error="sremarks9"></div>

                        </td>

                        <td><input type="text" name="exp9" class="form-control" />
                            <div class="text-danger error" data-error="exp9"></div>

                        </td>

                    </tr>

                    <tr>

                        <td> <select class="form-control" name="skill10">
                                <option selected disabled>Choose...</option>
                                <option>HTML</option>
                                <option>CSS</option>
                                <option>JAVASCRIPT</option>
                                <option>PHP/MySQL</option>
                                <option>Frontend Web Design</option>
                                <option>Web DevOPS</option>
                                <option>Dart</option>
                                <option>Flutter</option>
                                <option>Frontend Android Design</option>
                                <option>Backend Android App integration</option>
                                <option>Swift UI</option>
                                <option>Xcode</option>
                                <option>Frontend Ios App Design</option>
                                <option>Ms Azure Resorce Management</option>
                                <option>Ms Azure Hosting</option>
                                <option>Ms Azure DevOPS</option>
                                <option>Full Stack Web Developer</option>
                                <option>Full Stack Ios Developer</option>
                                <option>Full Stack Android Developer</option>
                                <option>Full Stack DevOPS Ms Azure Administrator</option>
                                <option>Web RTC</option>
                                <option>Angular</option>
                                <option>Laravel</option>


                            </select>
                            <div class="text-danger error" data-error="skill10"></div>

                        </td>

                        <td><input type="text" name="eval10" class="form-control" />
                            <div class="text-danger error" data-error="eval10"></div>

                        </td>

                        <td><input type="text" name="sremarks10" class="form-control" />
                            <div class="text-danger error" data-error="sremarks"></div>

                        </td>

                        <td><input type="text" name="exp10" class="form-control" />
                            <div class="text-danger error" data-error="exp10"></div>

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

                        <td> <input type="text" class="form-control" name="add_skill1">
                            <div class="text-danger error" data-error="add_skill1"></div>

                        </td>

                        <td><input type="text" name="add_eval1" class="form-control" />
                            <div class="text-danger error" data-error="add_eval1"></div>

                        </td>

                        <td><input type="text" name="add_sremarks1" class="form-control" />
                            <div class="text-danger error" data-error="add_sremarks1"></div>

                        </td>

                        <td><input type="text" name="add_exp1" class="form-control" />
                            <div class="text-danger error" data-error="add_exp1"></div>

                        </td>

                    </tr>


                    <tr>

                        <td> <input type="text" class="form-control" name="add_skill2">
                            <div class="text-danger error" data-error="add_skill2"></div>

                        </td>

                        <td><input type="text" name="add_eval2" class="form-control" />
                            <div class="text-danger error" data-error="add_eval2"></div>

                        </td>

                        <td><input type="text" name="add_sremarks2" class="form-control" />
                            <div class="text-danger error" data-error="add_sremarks"></div>

                        </td>

                        <td><input type="text" name="add_exp2" class="form-control" />
                            <div class="text-danger error" data-error="add_exp2"></div>

                        </td>

                    </tr>

                    <tr>


                        <td> <input type="text" class="form-control" name="add_skill3">
                            <div class="text-danger error" data-error="add_skill3"></div>

                        </td>

                        <td><input type="text" name="add_eval3" class="form-control" />
                            <div class="text-danger error" data-error="add_eval3"></div>

                        </td>

                        <td><input type="text" name="add_sremarks3" class="form-control" />
                            <div class="text-danger error" data-error="add_sremarks"></div>

                        </td>

                        <td><input type="text" name="add_exp3" class="form-control" />
                            <div class="text-danger error" data-error="add_exp3"></div>

                        </td>

                    </tr>

                    <tr>

                        <td> <input type="text" class="form-control" name="add_skill4">
                            <div class="text-danger error" data-error="add_skill4"></div>

                        </td>

                        <td><input type="text" name="add_eval4" class="form-control" />
                            <div class="text-danger error" data-error="add_eval4"></div>

                        </td>

                        <td><input type="text" name="add_sremarks4" class="form-control" />
                            <div class="text-danger error" data-error="add_sremarks4"></div>

                        </td>

                        <td><input type="text" name="add_exp4" class="form-control" />
                            <div class="text-danger error" data-error="add_exp4"></div>

                        </td>

                    </tr>

                    <tr>

                        <td> <input type="text" class="form-control" name="add_skill5">
                            <div class="text-danger error" data-error="add_skill5"></div>

                        </td>

                        <td><input type="text" name="add_eval5" class="form-control" />
                            <div class="text-danger error" data-error="add_eval5"></div>

                        </td>

                        <td><input type="text" name="add_sremarks5" class="form-control" />
                            <div class="text-danger error" data-error="add_sremarks5"></div>

                        </td>

                        <td><input type="text" name="add_exp5" class="form-control" />
                            <div class="text-danger error" data-error="add_exp5"></div>

                        </td>

                    </tr>



                </table>


                <label class="col-md-12">Special Category Information (if any, optional to share)</label>
                <div class="text-danger error" data-error="spl_category"></div>


                <div class="radio col-md-3">
                    <label><input type="radio" name="spl_category" value="Differently Abled">Differently Abled</label>
                </div>
                <div class="radio col-md-3">
                    <label><input type="radio" name="spl_category" value="From Martyr Family">From Martyr Family</label>
                </div>
                <div class="radio col-md-3">
                    <label><input type="radio" name="spl_category" value="Single/No Parent">Single/No Parent</label>
                </div>
                <div class="radio col-md-3">
                    <label><input type="radio" name="spl_category" value="None">None</label>
                </div>

                <div class="form-group col-md-6">
                    <label>Special Category details</label>
                    <input type="text" class="form-control" name="spl_category_details">
                    <div class="text-danger error" data-error="spl_category_details"></div>
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

                        <td><input type="text" class="form-control" name="ref_name">
                            <div class="text-danger error" data-error="ref_name"></div>

                        </td>

                        <td><input type="text" class="form-control" name="ref_number">
                            <div class="text-danger error" data-error="ref_number"></div>

                        </td>

                        <td><input type="text" class="form-control" name="ref_occupation">
                            <div class="text-danger error" data-error="ref_occupation"></div>

                        </td>

                        <td> <select class="form-control " name="ref_relation">
                                <div id="skillsDropDown">
                                    <option selected disabled>Choose...</option>
                                    <option>Relative</option>
                                    <option>Childhood Friend</option>
                                    <option>Friend</option>
                                    <option>Colleague</option>
                                    <option>Known Person</option>
                                </div>
                            </select>
                            <div class="text-danger error" data-error="ref_relation"></div>

                        </td>

                    </tr>


                    <tr>

                        <td><input type="text" class="form-control" name="ref_name1">
                            <div class="text-danger error" data-error="ref_name1"></div>

                        </td>

                        <td><input type="text" class="form-control" name="ref_number1">
                            <div class="text-danger error" data-error="ref_number1"></div>

                        </td>

                        <td><input type="text" class="form-control" name="ref_occupation1">
                            <div class="text-danger error" data-error="ref_occupation1"></div>

                        </td>

                        <td> <select class="form-control" name="ref_relation1">
                                <div id="skillsDropDown">
                                    <option selected disabled>Choose...</option>
                                    <option>Relative</option>
                                    <option>Childhood Friend</option>
                                    <option>Friend</option>
                                    <option>Colleague</option>
                                    <option>Known Person</option>
                                </div>
                            </select>
                            <div class="text-danger error" data-error="ref_relation1"></div>

                        </td>

                    </tr>


                    <tr>

                        <td><input type="text" class="form-control" name="ref_name2">
                            <div class="text-danger error" data-error="ref_name2"></div>

                        </td>

                        <td><input type="text" class="form-control" name="ref_number2">
                            <div class="text-danger error" data-error="ref_number2"></div>

                        </td>

                        <td><input type="text" class="form-control" name="ref_occupation2">
                            <div class="text-danger error" data-error="ref_occupation2"></div>

                        </td>

                        <td> <select class="form-control" name="ref_relation2">
                                <div id="skillsDropDown">
                                    <option selected disabled>Choose...</option>
                                    <option>Relative</option>
                                    <option>Childhood Friend</option>
                                    <option>Friend</option>
                                    <option>Colleague</option>
                                    <option>Known Person</option>
                                </div>
                            </select>
                            <div class="text-danger error" data-error="ref_relation2"></div>

                        </td>

                    </tr>


                </table>

                <h1 class="display-5 text-dark text-left col-md-12">Final Details</h1>

                <div class="form-check col-md-12 ml-3 mt-3">
                    <input type="checkbox" class="form-check-input" name="recruit-partner" id="recruit-partner" value="yes">
                    <label class="form-check-label"><strong>Check this only if you have applied through recruitment partners
                            company</strong></label>
                </div>



                <div class="row" id="recruit-details">

                    <div class="form-group col-md-3">
                        <label>Partner Name</label>
                        <input type="text" class="form-control" name="partner_name">
                        <div class="text-danger error" data-error="partner_name"></div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Mobile Number</label>
                        <input type="text" class="form-control " name="partner_number">
                        <div class="text-danger error" data-error="partner_number"></div>

                    </div>

                    <div class="form-group col-md-3">
                        <label>Partner Company Name</label>
                        <input type="text" class="form-control" name="partner_company_name">
                        <div class="text-danger error" data-error="partner_company_name"></div>

                    </div>

                    <div class="form-group col-md-3">
                        <label>Partner Email-id</label>
                        <input type="text" class="form-control" name="partner_email">
                        <div class="text-danger error" data-error="partner_email"></div>

                    </div>

                </div>

                <div class="form-group col-md-4 mt-3">
                    <label>Available start date</label>
                    <input type="date" class="form-control" name="avl_date">
                    <div class="text-danger error" data-error="avl_date"></div>
                </div>

                <div class="form-group col-md-4 mt-3">
                    <label>Linkedin Profile Link</label>
                    <input type="text" class="form-control" name="linkedin">
                    <div class="text-danger error" data-error="linkedin"></div>
                </div>

                <div class="form-group col-md-4 mt-3">
                    <label>Facebook Profile</label>
                    <input type="text" class="form-control " name="facebook">
                    <div class="text-danger error" data-error="facebook"></div>


                </div>

                <input type="submit" value="Submit" class="btn btn-dark btn-block">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
    </div>

    </div>

    </form>

    <script type="text/javascript">
        function fillAddress(f) {
            if (f.sameaddress.checked == true) {
                f.present_address_l1.value = f.address_l1.value;
                f.present_address_l2.value = f.address_l2.value;
                f.present_city.value = f.city.value;
                f.present_state.value = f.state.value;
                f.present_pincode.value = f.pincode.value;
                f.present_country.value = f.country.value;
            }
        }

    </script>


    {{-- script for partner --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $("#recruit-details").hide();
            $("#recruit-partner").change(function() {
                $("#recruit-details").toggle();
            });
        });

    </script>

    {{-- script for add more fields --}}
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


    <script>
        $(document).ready(function() {

            $('#job_form').on('submit', function(event) {
                event.preventDefault();
                $('.error').html('');
                $.ajax({
                    url: "{{ route('test-form') }}",
                    method: "POST",
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        console.log("done");
                    },
                    error: function(error) {
                        let errors = error.responseJSON.errors
                        for (let key in errors) {
                            let errorDiv = $(`.error[data-error="${key}"]`);
                            if (errorDiv.length) {
                                errorDiv.text(errors[key][0]);
                            }
                        }
                    }
                })
            });

        });

    </script>



    </div>
@endsection
