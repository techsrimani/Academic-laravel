<style>
    .text-center {
        text-align: center !important;
    }
    body{
        padding: 50px;
    }
</style>
<h1 class="text-center">
    {{ $application->first_name . ' ' . $application->last_name }}'s application for
    job {{ $application->position }}</h1>

<img src="{{ URL::to('/') }}/public/images/{{ $application->photo }}" alt="..."
    class="img-thumbnail col-md-3 mb-5">

<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Full Name</td>
        <td style="border:1px solid black">
            {{ $application->first_name . ' ' . $application->last_name }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">For Position </td>
        <td style="border:1px solid black">{{ $application->position }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Mail </td>
        <td style="border:1px solid black">{{ $application->email }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Alternate Mail </td>
        <td style="border:1px solid black">{{ $application->alt_email }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Phone </td>
        <td style="border:1px solid black">{{ $application->phone }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Alt Phone </td>
        <td style="border:1px solid black">{{ $application->alt_phone }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Date Of Birth </td>
        <td style="border:1px solid black">{{ $application->dob }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Date Of Birth </td>
        <td style="border:1px solid black">{{ $application->dob }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Age </td>
        <td style="border:1px solid black">{{ $application->age }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Sex </td>
        <td style="border:1px solid black">{{ $application->sex }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Submitted At</td>
        <td style="border:1px solid black">{{ $application->created_at }}</td>
    </tr>

</table>

<h3 class="text-center ">
    Parent details
</h3>

<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <th style="border:1px solid black">Relation</th>
        <th style="border:1px solid black">Name</th>
        <th style="border:1px solid black">Phone</th>
        <th style="border:1px solid black">Occupation</th>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Father</td>
        <td style="border:1px solid black">{{ $application->father_name }}</td>
        <td style="border:1px solid black">{{ $application->father_phone }}</td>
        <td style="border:1px solid black">{{ $application->father_occupation }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Mother</td>
        <td style="border:1px solid black">{{ $application->mother_name }}</td>
        <td style="border:1px solid black">{{ $application->mother_phone }}</td>
        <td style="border:1px solid black">{{ $application->mother_occupation }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Gaurdian</td>
        <td style="border:1px solid black">{{ $application->gaurdian_name }}</td>
        <td style="border:1px solid black">{{ $application->gaurdian_phone }}</td>
        <td style="border:1px solid black">{{ $application->gaurdian_occupation }}</td>
    </tr>
</table>

<h3 class="text-center ">
    Permanent Address
</h3>
<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Address line 1</td>
        <td style="border:1px solid black">
            {{ $application->address_l1 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Address line2</td>
        <td style="border:1px solid black">{{ $application->address_l2 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">City</td>
        <td style="border:1px solid black">{{ $application->city }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">State </td>
        <td style="border:1px solid black">{{ $application->state }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Pincode </td>
        <td style="border:1px solid black">{{ $application->pincode }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Country</td>
        <td style="border:1px solid black">{{ $application->country }}</td>
    </tr>
</table>
<h3 class="text-center ">
    Present Address
</h3>
<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Address line 1</td>
        <td style="border:1px solid black"> {{ $application->present_address_l1 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Address line2</td>
        <td style="border:1px solid black">{{ $application->present_address_l2 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">City</td>
        <td style="border:1px solid black">{{ $application->present_city }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">State </td>
        <td style="border:1px solid black">{{ $application->present_state }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Pincode </td>
        <td style="border:1px solid black">{{ $application->present_pincode }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Country</td>
        <td style="border:1px solid black">{{ $application->present_country }}</td>
    </tr>
</table>

<h3 class="text-center "> Education Details </h3>


<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <th style="border:1px solid black">Degree</th>
        <th style="border:1px solid black">Institute</th>
        <th style="border:1px solid black">Year</th>
        <th style="border:1px solid black">Aggregate</th>
        <th style="border:1px solid black">Remarks</th>
    </tr>
    @foreach($application->educationDetails as $edu)
        <tr style="border:1px solid black">
            <td style="border:1px solid black">{{ $edu->degree }}</td>
            <td style="border:1px solid black">{{ $edu->institute }}</td>
            <td style="border:1px solid black">{{ $edu->year }}</td>
            <td style="border:1px solid black">{{ $edu->aggregate }}</td>
            <td style="border:1px solid black">{{ $edu->remarks }}</td>
        </tr>
    @endforeach

</table>
<h3 class="text-center ">
    Current Status details
</h3>
<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Employement Status</td>
        <td style="border:1px solid black"> {{ $application->employee_status }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Current CTC</td>
        <td style="border:1px solid black">{{ $application->current_ctc }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Expected CTC</td>
        <td style="border:1px solid black">{{ $application->expected_ctc }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Experience</td>
        <td style="border:1px solid black">{{ $application->experience }}</td>
    </tr>
</table>

<h3 class="text-center ">
    Work Experience
</h3>
<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <th style="border:1px solid black">Company</th>
        <th style="border:1px solid black">Role</th>
        <th style="border:1px solid black">From</th>
        <th style="border:1px solid black">To</th>
        <th style="border:1px solid black">Accomplishments</th>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">{{$application->company1 }}</td>
        <td style="border:1px solid black">{{ $application->role1 }}</td>
        <td style="border:1px solid black">{{ $application->from1 }}</td>
        <td style="border:1px solid black">{{ $application->to1 }}</td>
        <td style="border:1px solid black">{{ $application->accomplishments1 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">{{$application->company2 }}</td>
        <td style="border:1px solid black">{{ $application->role2 }}</td>
        <td style="border:1px solid black">{{ $application->from2 }}</td>
        <td style="border:1px solid black">{{ $application->to2 }}</td>
        <td style="border:1px solid black">{{ $application->accomplishments2 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">{{$application->company3 }}</td>
        <td style="border:1px solid black">{{ $application->role3 }}</td>
        <td style="border:1px solid black">{{ $application->from3 }}</td>
        <td style="border:1px solid black">{{ $application->to3 }}</td>
        <td style="border:1px solid black">{{ $application->accomplishments3 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">{{ $application->company4 }}</td>
        <td style="border:1px solid black">{{ $application->role4 }}</td>
        <td style="border:1px solid black">{{ $application->from4 }}</td>
        <td style="border:1px solid black">{{ $application->to4 }}</td>
        <td style="border:1px solid black">{{ $application->accomplishments4 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">{{ $application->company5 }}</td>
        <td style="border:1px solid black">{{ $application->role5 }}</td>
        <td style="border:1px solid black">{{ $application->from5 }}</td>
        <td style="border:1px solid black">{{ $application->to5 }}</td>
        <td style="border:1px solid black">{{ $application->accomplishments5 }}</td>
    </tr>
</table>

<h3 class="text-center ">
    Projects
</h3>
<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <th style="border:1px solid black">Link</th>
        <th style="border:1px solid black">Role</th>
        <th style="border:1px solid black">Skills</th>
        <th style="border:1px solid black">Contribution</th>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->link1 }}</td>
        <td style="border:1px solid black">{{ $application->your_role1 }}</td>
        <td style="border:1px solid black">{{ $application->skills1 }}</td>
        <td style="border:1px solid black">{{ $application->contribution1 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->link2 }}</td>
        <td style="border:1px solid black">{{ $application->your_role2 }}</td>
        <td style="border:1px solid black">{{ $application->skills2 }}</td>
        <td style="border:1px solid black">{{ $application->contribution2 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->link3 }}</td>
        <td style="border:1px solid black">{{ $application->your_role3 }}</td>
        <td style="border:1px solid black">{{ $application->skills3 }}</td>
        <td style="border:1px solid black">{{ $application->contribution3 }}</td>
    </tr>
</table>

<h3 class="text-center ">
    Skills in order
</h3>

<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <th style="border:1px solid black">Skill</th>
        <th style="border:1px solid black">Self evaluation</th>
        <th style="border:1px solid black">Experience</th>
        <th style="border:1px solid black">Remarks</th>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->skill1 }}</td>
        <td style="border:1px solid black">{{ $application->eval1 }}</td>
        <td style="border:1px solid black">{{ $application->exp1 }}</td>
        <td style="border:1px solid black">{{ $application->sremarks1 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->skill2 }}</td>
        <td style="border:1px solid black">{{ $application->eval2 }}</td>
        <td style="border:1px solid black">{{ $application->exp2 }}</td>
        <td style="border:1px solid black">{{ $application->sremarks2 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->skill3 }}</td>
        <td style="border:1px solid black">{{ $application->eval3 }}</td>
        <td style="border:1px solid black">{{ $application->exp3 }}</td>
        <td style="border:1px solid black">{{ $application->sremarks3 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->skill4 }}</td>
        <td style="border:1px solid black">{{ $application->eval4 }}</td>
        <td style="border:1px solid black">{{ $application->exp4 }}</td>
        <td style="border:1px solid black">{{ $application->sremarks4 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->skill5 }}</td>
        <td style="border:1px solid black">{{ $application->eval5 }}</td>
        <td style="border:1px solid black">{{ $application->exp5 }}</td>
        <td style="border:1px solid black">{{ $application->sremarks5 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->skill6 }}</td>
        <td style="border:1px solid black">{{ $application->eval6 }}</td>
        <td style="border:1px solid black">{{ $application->exp6 }}</td>
        <td style="border:1px solid black">{{ $application->sremarks6 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->skill7 }}</td>
        <td style="border:1px solid black">{{ $application->eval7 }}</td>
        <td style="border:1px solid black">{{ $application->exp7 }}</td>
        <td style="border:1px solid black">{{ $application->sremarks7 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->skill8 }}</td>
        <td style="border:1px solid black">{{ $application->eval8 }}</td>
        <td style="border:1px solid black">{{ $application->exp8 }}</td>
        <td style="border:1px solid black">{{ $application->sremarks8 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->skill9 }}</td>
        <td style="border:1px solid black">{{ $application->eval9 }}</td>
        <td style="border:1px solid black">{{ $application->exp9 }}</td>
        <td style="border:1px solid black">{{ $application->sremarks9 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->skill10 }}</td>
        <td style="border:1px solid black">{{ $application->eval10 }}</td>
        <td style="border:1px solid black">{{ $application->exp10 }}</td>
        <td style="border:1px solid black">{{ $application->sremarks10 }}</td>
    </tr>
</table>


<h3 class="text-center ">
    Skills in order
</h3>

<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <th style="border:1px solid black">Skill</th>
        <th style="border:1px solid black">Self evaluation</th>
        <th style="border:1px solid black">Experience</th>
        <th style="border:1px solid black">Remarks</th>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->add_skill1 }}</td>
        <td style="border:1px solid black">{{ $application->add_eval1 }}</td>
        <td style="border:1px solid black">{{ $application->add_exp1 }}</td>
        <td style="border:1px solid black">{{ $application->add_sremarks1 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->add_skill2 }}</td>
        <td style="border:1px solid black">{{ $application->add_eval2 }}</td>
        <td style="border:1px solid black">{{ $application->add_exp2 }}</td>
        <td style="border:1px solid black">{{ $application->add_sremarks2 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->add_skill3 }}</td>
        <td style="border:1px solid black">{{ $application->add_eval3 }}</td>
        <td style="border:1px solid black">{{ $application->add_exp3 }}</td>
        <td style="border:1px solid black">{{ $application->add_sremarks3 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->add_skill4 }}</td>
        <td style="border:1px solid black">{{ $application->add_eval4 }}</td>
        <td style="border:1px solid black">{{ $application->add_exp4 }}</td>
        <td style="border:1px solid black">{{ $application->add_sremarks4 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->add_skill5 }}</td>
        <td style="border:1px solid black">{{ $application->add_eval5 }}</td>
        <td style="border:1px solid black">{{ $application->add_exp5 }}</td>
        <td style="border:1px solid black">{{ $application->add_sremarks5 }}</td>
    </tr>
</table>

<h3 class="text-center ">
    Reference Details
</h3>

<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <th style="border:1px solid black">Name</th>
        <th style="border:1px solid black">Number</th>
        <th style="border:1px solid black">Occupation</th>
        <th style="border:1px solid black">Relation</th>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->ref_name }}</td>
        <td style="border:1px solid black">{{ $application->ref_number }}</td>
        <td style="border:1px solid black">{{ $application->ref_occupation }}</td>
        <td style="border:1px solid black">{{ $application->ref_relation }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">{{ $application->ref_name1 }}</td>
        <td style="border:1px solid black">{{ $application->ref_number1 }}</td>
        <td style="border:1px solid black">{{ $application->ref_occupation1 }}</td>
        <td style="border:1px solid black">{{ $application->ref_relation1 }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black"> {{ $application->ref_name2 }}</td>
        <td style="border:1px solid black">{{ $application->ref_number2 }}</td>
        <td style="border:1px solid black">{{ $application->ref_occupation2 }}</td>
        <td style="border:1px solid black">{{ $application->ref_relation2 }}</td>
    </tr>
</table>
<h3 class="text-center ">
    Recruit Partner Details
</h3>
<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Partner Name</td>
        <td style="border:1px solid black"> {{ $application->partner_name }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Partner Number</td>
        <td style="border:1px solid black">{{ $application->partner_number }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Partner Company Name</td>
        <td style="border:1px solid black">{{ $application->partner_company_name }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Partner Email</td>
        <td style="border:1px solid black">{{ $application->partner_email }}</td>
    </tr>
</table>

<h3 class="text-center ">
    Special category details
</h3>
<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Special Catogory</td>
        <td style="border:1px solid black"> {{ $application->spl_category }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Special Catogory Details</td>
        <td style="border:1px solid black">{{ $application->spl_category_details }}</td>
    </tr>

</table>

<h3 class="text-center ">
    Date Linkedin and Facebook,
</h3>
<table style="width:100%; border:1px solid black">
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Available date of joining</td>
        <td style="border:1px solid black"> {{ $application->avl_date }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Facebook</td>
        <td style="border:1px solid black">{{ $application->facebook }}</td>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">Linkedin</td>
        <td style="border:1px solid black">{{ $application->linkedin }}</td>
    </tr>

</table>
