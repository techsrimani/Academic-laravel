<?php

namespace App\Exports;

use App\Models\JobApplications;
use Maatwebsite\Excel\Concerns\FromCollection;

class JobApplicantsExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return JobApplications::latest()->get();
    }

    public function headings()
    {
        return [
            'position',
            'first_name',
            'last_name',
            'photo',
            'dob',
            'age',
            'sex',
            'email',
            'alt_email',
            'phone',
            'alt_phone',

            'father_name',
            'father_phone',
            'father_occupation',
            'mother_name',
            'mother_phone',
            'mother_occupation',
            'gaurdian_name',
            'gaurdian_phone',
            'gaurdian_occupation',

            'address_l1',
            'address_l2',
            'city',
            'state',
            'pincode',
            'country',

            'present_address_l1',
            'present_address_l2',
            'present_city',
            'present_state',
            'present_pincode',
            'present_country',


            'employee_status',
            'current_ctc',
            'expected_ctc',
            'experience',

            'company1',
            'from1',
            'to1',
            'accomplishments1',
            'role1',
            'company2',
            'from2',
            'to2',
            'accomplishments2',
            'role2',
            'company3',
            'from3',
            'to3',
            'accomplishments3',
            'role3',
            'company4',
            'from4',
            'to4',
            'accomplishments4',
            'role4',
            'from5',
            'to5',
            'accomplishments5',
            'role5',

            'link1',
            'your_role1',
            'skills1',
            'contribution1',
            'link2',
            'your_role2',
            'skills2',
            'contribution2',
            'link3',
            'your_role3',
            'skills3',
            'contribution3',

            'skill1',
            'eval1',
            'sremarks1',
            'exp1',
            'skill2',
            'eval2',
            'sremarks2',
            'exp2',
            'skill3',
            'eval3',
            'sremarks3',
            'skill4',
            'eval4',
            'sremarks4',
            'exp4',
            'skill4',
            'eval4',
            'sremarks4',
            'exp4',
            'skill5',
            'eval5',
            'sremarks5',
            'exp5',
            'add_skill1',
            'add_eval1',
            'add_sremarks1',
            'add_exp1',
            'add_skill2',
            'add_eval2',
            'add_sremarks2',
            'add_exp2',
            'add_skill3',
            'add_eval3',
            'add_sremarks3',
            'add_exp3',
            'add_skill4',
            'add_eval4',
            'add_sremarks4',
            'add_exp4',
            'add_skill5',
            'add_eval5',
            'add_sremarks5',
            'add_exp5',


            'ref_name',
            'ref_number',
            'ref_occupation',
            'ref_relation',
            'ref_name1',
            'ref_number1',
            'ref_occupation1',
            'ref_relation1',
            'ref_name2',
            'ref_number2',
            'ref_occupation2',
            'ref_relation2',
            'spl_category',
            'spl_category_details',
            'avl_date',
            'linkedin',
            'facebook',
        ];
    }
}
