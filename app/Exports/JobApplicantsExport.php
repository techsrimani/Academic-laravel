<?php

namespace App\Exports;

use App\Models\JobApplications;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class JobApplicantsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return JobApplications::latest()->get();
    }

    public function map($application): array
    {
        $items = [];

        array_push(
            $items,
            $application->id,
            $application->position,
            $application->first_name,
            $application->last_name,
            $application->photo,
            $application->dob,
            $application->age,
            $application->sex,
            $application->email,
            $application->alt_email,
            $application->phone,
            $application->alt_phone,
            $application->father_name,
            $application->father_phone,
            $application->father_occupation,
            $application->mother_name,
            $application->mother_phone,
            $application->mother_occupation,
            $application->gaurdian_name,
            $application->gaurdian_phone,
            $application->gaurdian_occupation,
            $application->address_l1,
            $application->address_l2,
            $application->city,
            $application->state,
            $application->pincode,
            $application->country,
            $application->present_address_l1,
            $application->present_address_l2,
            $application->present_city,
            $application->present_state,
            $application->present_pincode,
            $application->present_country,
            $application->employee_status,
            $application->current_ctc,
            $application->expected_ctc,
            $application->experience,
            $application->company1,
            $application->from1,
            $application->to1,
            $application->accomplishments1,
            $application->role1,
            $application->company2,
            $application->from2,
            $application->to2,
            $application->accomplishments2,
            $application->role2,
            $application->company3,
            $application->from3,
            $application->to3,
            $application->accomplishments3,
            $application->role3,
            $application->company4,
            $application->from4,
            $application->to4,
            $application->accomplishments4,
            $application->role4,
            $application->company5,
            $application->from5,
            $application->to5,
            $application->accomplishments5,
            $application->role5,
            $application->link1,
            $application->your_role1,
            $application->skills1,
            $application->contribution1,
            $application->link2,
            $application->your_role2,
            $application->skills2,
            $application->contribution2,
            $application->link3,
            $application->your_role3,
            $application->skills3,
            $application->contribution3,
            $application->skill1,
            $application->eval1,
            $application->sremarks1,
            $application->exp1,
            $application->skill2,
            $application->eval2,
            $application->sremarks2,
            $application->exp2,
            $application->skill3,
            $application->eval3,
            $application->sremarks3,
            $application->exp3,
            $application->skill4,
            $application->eval4,
            $application->sremarks4,
            $application->exp4,
            $application->skill5,
            $application->eval5,
            $application->sremarks5,
            $application->exp5,
            $application->skill6,
            $application->eval6,
            $application->sremarks6,
            $application->exp6,
            $application->skill7,
            $application->eval7,
            $application->sremarks7,
            $application->exp7,
            $application->skill8,
            $application->eval8,
            $application->sremarks8,
            $application->exp8,
            $application->skill9,
            $application->eval9,
            $application->sremarks9,
            $application->exp9,
            $application->skill10,
            $application->eval10,
            $application->sremarks10,
            $application->exp10,
            $application->add_skill1,
            $application->add_eval1,
            $application->add_sremarks1,
            $application->add_exp1,
            $application->add_skill2,
            $application->add_eval2,
            $application->add_sremarks2,
            $application->add_exp2,
            $application->add_skill3,
            $application->add_eval3,
            $application->add_sremarks3,
            $application->add_exp3,
            $application->add_skill4,
            $application->add_eval4,
            $application->add_sremarks4,
            $application->add_exp4,
            $application->add_skill5,
            $application->add_eval5,
            $application->add_sremarks5,
            $application->add_exp5,
            $application->ref_name,
            $application->ref_number,
            $application->ref_occupation,
            $application->ref_relation,
            $application->ref_name1,
            $application->ref_number1,
            $application->ref_occupation1,
            $application->ref_relation1,
            $application->ref_name2,
            $application->ref_number2,
            $application->ref_occupation2,
            $application->ref_relation2,
            $application->spl_category,
            $application->spl_category_details,
            $application->partner_name,
            $application->partner_number,
            $application->partner_company_name,
            $application->partner_email,
            $application->avl_date,
            $application->linkedin,
            $application->facebook,

        );

        foreach ($application->educationDetails as $edu) {
            // $job[] = $edu->degree;
            // $job[] = $edu->institute;
            // $job[] = $edu->year;
            // $job[] = $edu->aggregate;
            // $job[] = $edu->remarks;
            array_push($items, $edu->degree, $edu->institute, $edu->year, $edu->aggregate, $edu->remarks);
        }



        return $items;
    }
    public function headings(): array
    {
        return [
            "id",
            "position",
            "first name",
            "last name",
            "photo",
            "dob",
            "age",
            "sex",
            "email",
            "alter email",
            "phone",
            "alt phone",
            "father_name",
            "father_phone",
            "father_occupation",
            "mother_name",
            "mother_phone",
            "mother_occupation",
            "gaurdian_name",
            "gaurdian_phone",
            "gaurdian_occupation",
            "permanent address_l1",
            "permanent address_l2",
            "city",
            "state",
            "pincode",
            "country",
            "present_address_l1",
            "present_address_l2",
            "present_city",
            "present_state",
            "present_pincode",
            "present_country",
            "employee_status",
            "current_ctc",
            "expected_ctc",
            "experience",
            "company1",
            "from1",
            "to1",
            "accomplishments1",
            "role1",
            "company2",
            "from2",
            "to2",
            "accomplishments2",
            "role2",
            "company3",
            "from3",
            "to3",
            "accomplishments3",
            "role3",
            "company4",
            "from4",
            "to4",
            "accomplishments4",
            "role4",
            "company5",
            "from5",
            "to5",
            "accomplishments5",
            "role5",
            "link1",
            "your_role1",
            "skills1",
            "contribution1",
            "link2",
            "your_role2",
            "skills2",
            "contribution2",
            "link3",
            "your_role3",
            "skills3",
            "contribution3",
            "skill1",
            "eval1",
            "sremarks1",
            "exp1",
            "skill2",
            "eval2",
            "sremarks2",
            "exp2",
            "skill3",
            "eval3",
            "sremarks3",
            "exp3",
            "skill4",
            "eval4",
            "sremarks4",
            "exp4",
            "skill5",
            "eval5",
            "sremarks5",
            "exp5",
            "skill6",
            "eval6",
            "sremarks6",
            "exp6",
            "skill7",
            "eval7",
            "sremarks7",
            "exp7",
            "skill8",
            "eval8",
            "sremarks8",
            "exp8",
            "skill9",
            "eval9",
            "sremarks9",
            "exp9",
            "skill10",
            "eval10",
            "sremarks10",
            "exp10",
            "add_skill1",
            "add_eval1",
            "add_sremarks1",
            "add_exp1",
            "add_skill2",
            "add_eval2",
            "add_sremarks2",
            "add_exp2",
            "add_skill3",
            "add_eval3",
            "add_sremarks3",
            "add_exp3",
            "add_skill4",
            "add_eval4",
            "add_sremarks4",
            "add_exp4",
            "add_skill5",
            "add_eval5",
            "add_sremarks5",
            "add_exp5",
            "ref_name",
            "ref_number",
            "ref_occupation",
            "ref_relation",
            "ref_name1",
            "ref_number1",
            "ref_occupation1",
            "ref_relation1",
            "ref_name2",
            "ref_number2",
            "ref_occupation2",
            "ref_relation2",
            "spl_category",
            "spl_category_details",
            "partner_name",
            "partner_number",
            "partner_company_name",
            "partner_email",
            "avl_date",
            "linkedin",
            "facebook"
        ];
    }
}
