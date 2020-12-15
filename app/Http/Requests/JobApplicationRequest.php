<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'position' => 'required',
            'first_name' => 'required|max:29',
            'last_name' => 'required|max:19',
            'photo' => 'required|mimes:jpeg,jpg,png|required|max:10000',
            'dob' => 'required',
            'age' => 'required| numeric|max:60',
            'sex' => 'required',
            'email' => 'required|email',
            'alt_email' => 'required|email',
            'phone' => 'required | numeric | digits:10 | starts_with: 6,7,8,9',
            'alt_phone' => 'required| numeric | digits:10 | starts_with: 6,7,8,9',

            'father_name' => 'required_without_all:mother_name,gaurdian_name|max:50',
            'father_phone' => 'required_without_all:mother_phone,gaurdian_phone| numeric | digits:10 | starts_with: 6,7,8,9',
            'father_occupation' => 'required_without_all:mother_occupation,gaurdian_occupation|max:29',

            'address_l1' => 'required|max:60',
            'address_l2' => 'required|max:60',
            'city' => 'required|max:35',
            'state' => 'required|max:30',
            'pincode' => 'required| numeric|max:999999',
            'country' => 'required',
            'present_address_l1' => 'required|max:60',
            'present_address_l2' => 'required|max:60',
            'present_city' => 'required|max:35',
            'present_state' => 'required|max:30',
            'present_pincode' => 'required|numeric|max:999999',
            'present_country' => 'required',
            //dynamic field validation
            'addmore.*.degree' => 'required|max : 30',
            'addmore.*.institute' => 'required| max:50',
            'addmore.*.year' => 'required|numeric|max:2021',
            'addmore.*.aggregate' => 'required|numeric|max:100',
            'addmore.*.remarks' => 'required|max:190',


            'employee_status' => 'required',
            'current_ctc' => 'required|numeric|max:70',
            'expected_ctc' => 'required|numeric|max:70',
            'experience' => 'required|numeric|max:30',

            'company1' => 'required|max:50',
            'from1' => 'required',
            'to1' => 'required',
            'accomplishments1' => 'required|max:200',
            'role1' => 'required|max:50',
            'company2' => 'max:50',
            'accomplishments2' => 'max:200',
            'role2' => 'max:50',
            'company3' => 'max:50',
            'accomplishments3' => 'max:200',
            'role3' => 'max:50',
            'company4' => 'max:50',
            'accomplishments4' => 'max:200',
            'role4' => 'max:50',
            'company5' => 'max:50',
            'accomplishments5' => 'max:200',
            'role5' => 'max:50',

            'link1' => 'required|max:150',
            'your_role1' => 'required|max:50',
            'skills1' => 'required|max:20',
            'contribution1' => 'required|numeric|max:100',
            'link2' => 'max:150',
            'your_role2' => 'max:50',
            'skills2' => 'max:20',
            'contribution2' => 'nullable|numeric|max:10',
            'link3' => 'max:150',
            'your_role3' => 'max:50',
            'skills3' => 'max:20',
            'contribution3' => 'nullable|numeric|max:100',

            'skill1' => 'required',
            'eval1' => 'numeric|max:10',
            'sremarks1' => 'required|max:190',
            'exp1' => 'required|nullable|numeric',
            'skill2' => 'max:20',
            'eval2' => 'nullable|numeric|max:10',
            'sremarks2' => 'max:190',
            'exp2' => 'nullable|numeric|max:30',
            'skill3' => 'max:20',
            'eval3' => 'nullable|numeric|max:10',
            'sremarks3' => 'max:190',
            'exp3' => 'nullable|numeric|max:30',
            'skill4' => 'max:20',
            'eval4' => 'nullable|numeric|max:10',
            'sremarks4' => 'max:190',
            'exp4' => 'nullable|numeric|max:30',
            'skill5' => 'max:20',
            'eval5' => 'nullable|numeric|max:10',
            'sremarks5' => 'max:190',
            'exp5' => 'nullable|numeric|max:30',

            'add_skill1' => 'max:20',
            'add_eval1' => 'nullable|numeric|max:10',
            'add_sremarks1' => 'max:190',
            'add_exp1' => 'nullable|numeric|max:30',
            'add_skill2' => 'max:20',
            'add_eval2' => 'nullable|numeric|max:10',
            'add_sremarks2' => 'max:190',
            'add_exp2' => 'nullable|numeric|max:30',
            'add_skill3' => 'max:20',
            'add_eval3' => 'nullable|numeric|max:10',
            'add_sremarks3' => 'max:190',
            'add_exp3' => 'nullable|numeric|max:30',
            'add_skill4' => 'max:20',
            'add_eval4' => 'nullable|numeric|max:10',
            'add_sremarks4' => 'max:190',
            'add_exp4' => 'nullable|numeric|max:30',
            'add_skill5' => 'max:20',
            'add_eval5' => 'nullable|numeric|max:10',
            'add_sremarks5' => 'max:190',
            'add_exp5' => 'nullable|numeric|max:30',


            'ref_name' => 'required|max:30',
            'ref_number' => 'required| numeric | digits:10 | starts_with: 6,7,8,9',
            'ref_occupation' => 'required|max:40',
            'ref_relation' => 'required',
            'ref_name1' => 'required|max:30',
            'ref_number1' => 'required| numeric | digits:10 | starts_with: 6,7,8,9',
            'ref_occupation1' => 'required|max:40',
            'ref_relation1' => 'required',
            'ref_name2' => 'required|max:30',
            'ref_number2' => 'required| numeric | digits:10 | starts_with: 6,7,8,9',
            'ref_occupation2' =>  'required|max:40',
            'ref_relation2' => 'required',
            'spl_category_details' => 'max:190',
            'avl_date' => 'required',
            'linkedin' => 'required|max:190',
            'facebook' => 'required|max:190',

        ];
    }
}
