@extends('layouts.app')
@section('content')


    <h1 class="display-3 text-center">{{ $application->first_name . ' ' . $application->last_name }}'s application</h1>



    <div class="container">


        <div class="row shadow p-3 mb-5 bg-white rounded">

            <img src="{{ URL::to('/') }}/public/images/{{ $application->photo }}" alt="..."
                class="img-thumbnail col-md-3 mb-5">
            <h3 class="card-header col-md-9 mb-5"><strong>Name :</strong>
                {{ $application->first_name . ' ' . $application->last_name }} <br>
                <strong>For Position : </strong>{{ $application->position }}

            </h3>

            <p class="col-md-6"><strong>Mail : </strong>{{ $application->email }}</p>
            <p class="col-md-6"><strong>Alternate Mail : </strong>{{ $application->alt_email }}</p>
            <p class="col-md-6"><strong>Phone : </strong>{{ $application->phone }}</p>
            <p class="col-md-6"><strong>Alt Phone : </strong>{{ $application->alt_phone }}</p>
            <p class="col-md-6"><strong>Date Of Birth : </strong>{{ $application->dob }}</p>
            <p class="col-md-6"><strong>Age : </strong>{{ $application->age }}</p>
            <p class="col-md-6"><strong>Sex : </strong>{{ $application->sex }}</p>
            <p class="col-md-6"><strong>Submitted At : </strong>{{ $application->created_at }}</p>


            <h3 class="card-header col-md-12 mb-5 ">
                Parent Details
            </h3>
            <p class="col-md-6"><strong>Father Name : </strong>{{ $application->father_name }}</p>
            <p class="col-md-6"><strong>Father Phone : </strong>{{ $application->father_phone }}</p>
            <p class="col-md-12"><strong>Father Occupation : </strong>{{ $application->father_occupation }}</p>
            <p class="col-md-6"><strong>Mother Name : </strong>{{ $application->mother_name }}</p>
            <p class="col-md-6"><strong>Mother Phone: </strong>{{ $application->mother_phone }}</p>
            <p class="col-md-12"><strong>Mother Occupation : </strong>{{ $application->mother_occupation }}</p>
            <p class="col-md-6"><strong>Gaurdian Name : </strong>{{ $application->gaurdian_name }}</p>
            <p class="col-md-6"><strong>Gaurdian Phone: </strong>{{ $application->gaurdian_phone }}</p>
            <p class="col-md-12"><strong>Gaurdian Occupation : </strong>{{ $application->gaurdian_occupation }}</p>

            <h3 class="card-header col-md-12 mb-5 ">
                Permanent Address
            </h3>
            <p class="col-md-6"><strong>Address Line 1 : </strong>{{ $application->address_l1 }}</p>
            <p class="col-md-6"><strong>Address Line 2 :</strong>{{ $application->address_l2 }}</p>
            <p class="col-md-12"><strong>City : </strong>{{ $application->city }}</p>
            <p class="col-md-6"><strong>State : </strong>{{ $application->state }}</p>
            <p class="col-md-6"><strong>Pincode: </strong>{{ $application->pincode }}</p>
            <p class="col-md-12"><strong>Country: </strong>{{ $application->country }}</p>

            <h3 class="card-header col-md-12 mb-5 ">
                Present Address
            </h3>
            <p class="col-md-6"><strong>Address Line 1 : </strong>{{ $application->present_address_l1 }}</p>
            <p class="col-md-6"><strong>Address Line 2 :</strong>{{ $application->present_address_l2 }}</p>
            <p class="col-md-12"><strong>City : </strong>{{ $application->present_city }}</p>
            <p class="col-md-6"><strong>State : </strong>{{ $application->present_state }}</p>
            <p class="col-md-6"><strong>Pincode: </strong>{{ $application->present_pincode }}</p>
            <p class="col-md-12"><strong>Country: </strong>{{ $application->present_country }}</p>

            <h3 class="card-header col-md-12 mb-5 ">
                Education Details
            </h3>
            @foreach ($application->educationDetails as $edu)
            <p class="col-md-6"><strong>Education : </strong>{{ $edu->degree }}</p>
            <p class="col-md-6"><strong>Institute : </strong>{{ $edu->institute }}</p>
            <p class="col-md-6"><strong>Completion Year : </strong>{{ $edu->year }}</p>
            <p class="col-md-6"><strong>Aggregate in % : </strong>{{ $edu->aggregate }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks: </strong>{{ $edu->remarks }}</p>

            @endforeach


            <h3 class="card-header col-md-12 mb-5 ">
                Current Status details
            </h3>
            <p class="col-md-6"><strong>Employement Status : </strong>{{ $application->employee_status }}</p>
            <p class="col-md-6"><strong>Current CTC : </strong>{{ $application->current_ctc }}</p>
            <p class="col-md-6"><strong>Expected CTC : </strong>{{ $application->expected_ctc }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->experience }}</p>

            <h3 class="card-header col-md-12 mb-5 ">
                Work Experience
            </h3>

            <p class="col-md-6"><strong>Company1 : </strong>{{ $application->company1 }}</p>
            <p class="col-md-6"><strong>Role : </strong>{{ $application->role1 }}</p>
            <p class="col-md-6"><strong>From : </strong>{{ $application->from1 }}</p>
            <p class="col-md-6"><strong>To : </strong>{{ $application->to1 }}</p>
            <p class="col-md-12 border-bottom"><strong>Accomplishments : </strong>{{ $application->accomplishments1 }}</p>


            <p class="col-md-6"><strong>Company2 : </strong>{{ $application->company2 }}</p>
            <p class="col-md-6"><strong>Role : </strong>{{ $application->role2 }}</p>
            <p class="col-md-6"><strong>From : </strong>{{ $application->from2 }}</p>
            <p class="col-md-6"><strong>To : </strong>{{ $application->to2 }}</p>
            <p class="col-md-12 border-bottom"><strong>Accomplishments : </strong>{{ $application->accomplishments2 }}</p>

            <p class="col-md-6"><strong>Company3 : </strong>{{ $application->company3 }}</p>
            <p class="col-md-6"><strong>Role : </strong>{{ $application->role3 }}</p>
            <p class="col-md-6"><strong>From : </strong>{{ $application->from3 }}</p>
            <p class="col-md-6"><strong>To : </strong>{{ $application->to3 }}</p>
            <p class="col-md-12 border-bottom"><strong>Accomplishments : </strong>{{ $application->accomplishments3 }}</p>

            <p class="col-md-6"><strong>Company4 : </strong>{{ $application->company4 }}</p>
            <p class="col-md-6"><strong>Role : </strong>{{ $application->role4 }}</p>
            <p class="col-md-6"><strong>From : </strong>{{ $application->from4 }}</p>
            <p class="col-md-6"><strong>To : </strong>{{ $application->to4 }}</p>
            <p class="col-md-12 border-bottom"><strong>Accomplishments : </strong>{{ $application->accomplishments4 }}</p>

            <p class="col-md-6 "><strong>Company5 : </strong>{{ $application->company5 }}</p>
            <p class="col-md-6"><strong>Role : </strong>{{ $application->role5 }}</p>
            <p class="col-md-6"><strong>From : </strong>{{ $application->from5 }}</p>
            <p class="col-md-6"><strong>To : </strong>{{ $application->to5 }}</p>
            <p class="col-md-12 border-bottom"><strong>Accomplishments : </strong>{{ $application->accomplishments5 }}</p>

            <h3 class="card-header col-md-12 mb-5">
                Projects
            </h3>

            <p class="col-md-6"><strong>Project Link : </strong><a href="{{ $application->link1 }}" target="_blank">
                    {{ $application->link1 }}
                </a></p>
            <p class="col-md-6"><strong>Role : </strong>{{ $application->your_role1 }}</p>
            <p class="col-md-6"><strong>Skills : </strong>{{ $application->skills1 }}</p>
            <p class="col-md-6 border-bottom"><strong>% of Contribution : </strong>{{ $application->contribution1 }}</p>

            <p class="col-md-6"><strong>Project Link : </strong><a href="{{ $application->link2 }}" target="_blank">
                    {{ $application->link2 }}
                </a></p>
            <p class="col-md-6"><strong>Role : </strong>{{ $application->your_role2 }}</p>
            <p class="col-md-6"><strong>Skills : </strong>{{ $application->skills2 }}</p>
            <p class="col-md-6 border-bottom"><strong>% of Contribution : </strong>{{ $application->contribution2 }}</p>

            <p class="col-md-6"><strong>Project Link : </strong><a href="{{ $application->link3 }}" target="_blank">
                    {{ $application->link3 }}
                </a></p>
            <p class="col-md-6"><strong>Role : </strong>{{ $application->your_role3 }}</p>
            <p class="col-md-6"><strong>Skills : </strong>{{ $application->skills3 }}</p>
            <p class="col-md-6 border-bottom"><strong>% of Contribution : </strong>{{ $application->contribution3 }}</p>


            <h3 class="card-header col-md-12 mb-5 ">
                Skills in order
            </h3>
            <p class="col-md-6"><strong>Skill 1 : </strong>{{ $application->skill1 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->eval1 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->exp1 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->sremarks1 }}</p>

            <p class="col-md-6"><strong>Skill 2 : </strong>{{ $application->skill2 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->eval2 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->exp2 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks: </strong>{{ $application->sremarks2 }}</p>

            <p class="col-md-6"><strong>Skill 3 : </strong>{{ $application->skill3 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->eval3 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->exp3 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->sremarks3 }}</p>

            <p class="col-md-6"><strong>Skill 4 : </strong>{{ $application->skill4 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->eval4 }}</p>
            <p class="col-md-6"><strong>Remarks : </strong>{{ $application->exp4 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->sremarks4 }}</p>

            <p class="col-md-6"><strong>Skill 5 : </strong>{{ $application->skill5 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->eval5 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->exp5 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->sremarks5 }}</p>

            <p class="col-md-6"><strong>Skill 6 : </strong>{{ $application->skill6 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->eval6 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->exp6 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->sremarks6 }}</p>

            <p class="col-md-6"><strong>Skill 7 : </strong>{{ $application->skill7 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->eval7 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->exp7 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->sremarks7 }}</p>

            <p class="col-md-6"><strong>Skill 8: </strong>{{ $application->skill8 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->eval8 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->exp8 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->sremarks8 }}</p>

            <p class="col-md-6"><strong>Skill 9: </strong>{{ $application->skill9 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->eval9 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->exp9 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->sremarks9 }}</p>

            <p class="col-md-6"><strong>Skill 10: </strong>{{ $application->skill10 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->eval10 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->exp10 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->sremarks10 }}</p>

            <h3 class="card-header col-md-12 mb-5 ">
                Additional Skills in order
            </h3>
            <p class="col-md-6"><strong>Skill 1 : </strong>{{ $application->add_skill1 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->add_eval1 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->add_exp1 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->add_sremarks1 }}</p>

            <p class="col-md-6"><strong>Skill 2 : </strong>{{ $application->add_skill2 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->add_eval2 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->add_exp2 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->add_sremarks2 }}</p>

            <p class="col-md-6"><strong>Skill 3 : </strong>{{ $application->add_skill3 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->add_eval3 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->add_exp3 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->add_sremarks3 }}</p>

            <p class="col-md-6"><strong>Skill 4 : </strong>{{ $application->add_skill4 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->add_eval4 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->add_exp4 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->add_sremarks4 }}</p>

            <p class="col-md-6"><strong>Skill 5 : </strong>{{ $application->add_skill5 }}</p>
            <p class="col-md-6"><strong>Self Evaluation 1-10 : </strong>{{ $application->add_eval5 }}</p>
            <p class="col-md-6"><strong>Experience : </strong>{{ $application->add_exp5 }}</p>
            <p class="col-md-12 border-bottom"><strong>Remarks : </strong>{{ $application->add_sremarks5 }}</p>


            <h3 class="card-header col-md-12 mb-5">
                Additional Skills in order
            </h3>
            <p class="col-md-6"><strong>Name : </strong>{{ $application->ref_name }}</p>
            <p class="col-md-6"><strong>Number : </strong>{{ $application->ref_number }}</p>
            <p class="col-md-6"><strong>Occupation : </strong>{{ $application->ref_occupation }}</p>
            <p class="col-md-6"><strong>Relation : </strong>{{ $application->ref_relation }}</p>
            <p class="border-bottom col-md-12"></p>

            <p class="col-md-6"><strong>Name : </strong>{{ $application->ref_name1 }}</p>
            <p class="col-md-6"><strong>Number : </strong>{{ $application->ref_number1 }}</p>
            <p class="col-md-6"><strong>Occupation : </strong>{{ $application->ref_occupation1 }}</p>
            <p class="col-md-6"><strong>Relation : </strong>{{ $application->ref_relation1 }}</p>
            <p class="border-bottom col-md-12"></p>

            <p class="col-md-6"><strong>Name : </strong>{{ $application->ref_name2 }}</p>
            <p class="col-md-6"><strong>Number : </strong>{{ $application->ref_number2 }}</p>
            <p class="col-md-6"><strong>Occupation : </strong>{{ $application->ref_occupation2 }}</p>
            <p class="col-md-6"><strong>Relation : </strong>{{ $application->ref_relation2 }}</p>

            <h3 class="card-header col-md-12  mb-5">
                Date Linkedin and Facebook,
            </h3>

            <p class="col-md-6"><strong>Special Category : </strong>{{ $application->spl_category }}</p>
            <p class="col-md-6"><strong>Special Category Details : </strong>{{ $application->ref_relation2 }}</p>


            <p class="border-bottom col-md-12"></p>

            <h3 class="card-header col-md-12  mb-5">
                Date Linkedin and Facebook,
            </h3>
            <p class="col-md-12"><strong>Available date of joining: </strong>{{ $application->avl_date }}</p>
            <p class="col-md-5"><strong>Facebook : </strong><a href="{{ $application->facebook }}" target="_blank">
                    {{ $application->facebook }}
                </a></p>
            <p class="col-md-5"><strong>Linkedin : </strong><a href="{{ $application->linkedin }}" target="_blank">
                    {{ $application->linkedin }}
                </a></p>

                <form action="{{ route('job-applications.delete',$application->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>



        </div>









    </div>


@endsection
