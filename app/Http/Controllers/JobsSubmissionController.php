<?php

namespace App\Http\Controllers;

use App\Exports\JobApplicantsByDateExport;
use App\Exports\JobApplicantsExport;
use App\Http\Requests\JobApplicationRequest;
use App\Http\Requests\TestRequest;
use App\Mail\JobSubmitAdminMAil;
use App\Mail\JobSubmitUserMail;
use App\Models\EducationDetails;
use App\Models\JobApplications;
//use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class JobsSubmissionController extends Controller
{

    public function index()
    {
        // Form::paginate(100,['id','name',.....]);
        $contactUs =  JobApplications::latest()->simplePaginate(10);

        return view('job_submissions', ['jobApplications' => $contactUs]);
    }

    public function create()
    {
        return view('job_form');
    }

    public function applicantDetails($id)
    {
        $application =  JobApplications::find($id);
        return view('application', compact('application', $application));
    }

    public function store(JobApplicationRequest $request)
    {

        $request->validated();

        if ($files = $request->file('photo')) {
            $destinationPath = 'public/images/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
        }

        $form_data = array(

            'position' => $request->position,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'photo' => $profileImage,
            'dob' => $request->dob,
            'age' => $request->age,
            'sex' => $request->sex,
            'email' => $request->email,
            'alt_email' => $request->alt_email,
            'phone' => $request->phone,
            'alt_phone' => $request->alt_phone,

            'father_name' => $request->father_name,
            'father_phone' => $request->father_phone,
            'father_occupation' => $request->father_occupation,
            'mother_name' => $request->mother_name,
            'mother_phone' => $request->mother_phone,
            'mother_occupation' => $request->mother_occupation,
            'gaurdian_name' => $request->gaurdian_name,
            'gaurdian_phone' => $request->gaurdian_phone,
            'gaurdian_occupation' => $request->gaurdain_occupation,

            'address_l1' => $request->address_l1,
            'address_l2' => $request->address_l2,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'country' => $request->country,

            'present_address_l1' => $request->present_address_l1,
            'present_address_l2' =>  $request->present_address_l2,
            'present_city' =>  $request->present_city,
            'present_state' => $request->present_state,
            'present_pincode' => $request->present_pincode,
            'present_country' => $request->present_country,


            'employee_status' => $request->employee_status,
            'current_ctc' => $request->current_ctc,
            'expected_ctc' => $request->expected_ctc,
            'experience' => $request->experience,

            'company1' => $request->company1,
            'from1' => $request->from1,
            'to1' => $request->to1,
            'accomplishments1' => $request->accomplishments1,
            'role1' => $request->role1,
            'company2' => $request->company2,
            'from2' => $request->from2,
            'to2' => $request->to2,
            'accomplishments2' => $request->accomplishments2,
            'role2' => $request->role2,
            'company3' => $request->company3,
            'from3' => $request->from3,
            'to3' => $request->to3,
            'accomplishments3' => $request->accomplishments3,
            'role3' => $request->role3,
            'company4' => $request->company4,
            'from4' => $request->from4,
            'to4' => $request->to4,
            'accomplishments4' => $request->accomplishments4,
            'role4' => $request->role4,
            'company5' => $request->company5,
            'from5' => $request->from5,
            'to5' => $request->to5,
            'accomplishments5' => $request->accomplishments5,
            'role5' => $request->role5,

            'link1' => $request->link1,
            'your_role1' => $request->your_role1,
            'skills1' => $request->skills1,
            'contribution1' => $request->contribution1,
            'link2' => $request->link2,
            'your_role2' => $request->your_role2,
            'skills2' => $request->skills2,
            'contribution2' => $request->contribution2,
            'link3' => $request->link3,
            'your_role3' => $request->your_role3,
            'skills3' => $request->skills3,
            'contribution3' => $request->contribution3,

            'skill1' => $request->skill1,
            'eval1' => $request->eval1,
            'sremarks1' => $request->sremarks1,
            'exp1' => $request->exp1,
            'skill2' => $request->skill2,
            'eval2' => $request->eval2,
            'sremarks2' => $request->sremarks2,
            'exp2' => $request->exp2,
            'skill3' => $request->skill3,
            'eval3' => $request->eval3,
            'sremarks3' => $request->sremarks3,
            'exp3' => $request->exp3,
            'skill4' => $request->skill4,
            'eval4' => $request->eval4,
            'sremarks4' => $request->sremarks4,
            'exp4' => $request->exp4,
            'skill4' => $request->skill4,
            'eval4' => $request->eval4,
            'sremarks4' => $request->sremarks4,
            'exp4' => $request->exp4,
            'skill5' => $request->skill5,
            'eval5' => $request->eval5,
            'sremarks5' => $request->sremarks5,
            'exp5' => $request->exp5,
            'skill6' => $request->skill6,
            'eval6' => $request->eval6,
            'sremarks6' => $request->sremarks6,
            'exp6' => $request->exp6,
            'skill7' => $request->skill7,
            'eval7' => $request->eval7,
            'sremarks7' => $request->sremarks7,
            'exp7' => $request->exp7,
            'skill8' => $request->skill8,
            'eval8' => $request->eval8,
            'sremarks8' => $request->sremarks8,
            'exp8' => $request->exp8,
            'skill9' => $request->skill9,
            'eval9' => $request->eval9,
            'sremarks9' => $request->sremarks9,
            'exp9' => $request->exp9,
            'skill10' => $request->skill9,
            'eval10' => $request->eval9,
            'sremarks10' => $request->sremarks9,
            'exp10' => $request->exp9,

            'add_skill1' => $request->add_skill1,
            'add_eval1' => $request->add_eval1,
            'add_sremarks1' => $request->add_sremarks1,
            'add_exp1' => $request->add_exp1,
            'add_skill2' => $request->add_skill2,
            'add_eval2' => $request->add_eval2,
            'add_sremarks2' => $request->add_sremarks2,
            'add_exp2' => $request->add_exp2,
            'add_skill3' => $request->add_skill3,
            'add_eval3' => $request->add_eval3,
            'add_sremarks3' => $request->add_sremarks3,
            'add_exp3' => $request->add_exp3,
            'add_skill4' => $request->add_skill4,
            'add_eval4' => $request->add_eval4,
            'add_sremarks4' => $request->add_sremarks4,
            'add_exp4' => $request->add_exp4,
            'add_skill5' => $request->add_skill5,
            'add_eval5' => $request->add_eval5,
            'add_sremarks5' => $request->add_sremarks5,
            'add_exp5' => $request->add_exp5,


            'ref_name' => $request->ref_name,
            'ref_number' => $request->ref_number,
            'ref_occupation' => $request->ref_occupation,
            'ref_relation' => $request->ref_relation,
            'ref_name1' => $request->ref_name1,
            'ref_number1' => $request->ref_number1,
            'ref_occupation1' => $request->ref_occupation1,
            'ref_relation1' => $request->ref_relation1,
            'ref_name2' => $request->ref_name2,
            'ref_number2' => $request->ref_number2,
            'ref_occupation2' => $request->ref_occupation2,
            'ref_relation2' => $request->ref_relation2,
            'spl_category' => $request->spl_category,
            'spl_category_details' => $request->spl_category_details,
            'partner_name' => $request->partner_name,
            'partner_number' => $request->partner_number,
            'partner_company_name' => $request->partner_company_name,
            'partner_email' => $request->partner_email,
            'avl_date' => $request->avl_date,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
        );


        $job = JobApplications::create($form_data);
        $addressInstances = [];

        foreach ($request->addmore as $key => $value) {

            $addressInstances[] = new EducationDetails($value);
        }

        $job->educationDetails()->saveMany($addressInstances);


        // Mail::send(new JobSubmitUserMail($job));
        // Mail::send(new JobSubmitAdminMAil($job));

        return redirect()->back()->with('success', 'Thanks for applying we will get back to you in a sometime! Good day');
    }

    public function destroy($id)
    {

        $job =  JobApplications::find($id);
        File::delete(public_path('public/images/') . $job->photo);
        $job->delete();
        return redirect()->route('job-applications')
            ->with('success', 'Product deleted successfully');
    }

    public function createApplicantPDF($id)
    {
        // retreive all records from db
        $job =  JobApplications::find($id);

        // share data to view
        view()->share('application', $job);
        $pdf = PDF::loadView('application-pdf', $job);


        // download PDF file with download method
        return $pdf->download('pdf_view.pdf');
    }

    public function exportExcel()
    {

        return Excel::download(new JobApplicantsExport, 'applications.xlsx');
    }
    public function exportExcelByDate(Request $request)
    {

        $this->validate($request, [
            'from' => 'required',
            'to' => 'required'
        ]);
        return Excel::download(new JobApplicantsByDateExport, 'By-date-applications.xlsx');
    }

    public function test()
    {
        return view('test_form');
    }

    public function testForm(JobApplicationRequest $request)
    {
        $request->validated();

        if ($files = $request->file('photo')) {
            $destinationPath = 'public/images/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
        }

        $form_data = array(

            'position' => $request->position,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'photo' => $profileImage,
            'dob' => $request->dob,
            'age' => $request->age,
            'sex' => $request->sex,
            'email' => $request->email,
            'alt_email' => $request->alt_email,
            'phone' => $request->phone,
            'alt_phone' => $request->alt_phone,

            'father_name' => $request->father_name,
            'father_phone' => $request->father_phone,
            'father_occupation' => $request->father_occupation,
            'mother_name' => $request->mother_name,
            'mother_phone' => $request->mother_phone,
            'mother_occupation' => $request->mother_occupation,
            'gaurdian_name' => $request->gaurdian_name,
            'gaurdian_phone' => $request->gaurdian_phone,
            'gaurdian_occupation' => $request->gaurdain_occupation,

            'address_l1' => $request->address_l1,
            'address_l2' => $request->address_l2,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'country' => $request->country,

            'present_address_l1' => $request->present_address_l1,
            'present_address_l2' =>  $request->present_address_l2,
            'present_city' =>  $request->present_city,
            'present_state' => $request->present_state,
            'present_pincode' => $request->present_pincode,
            'present_country' => $request->present_country,

            'employee_status' => $request->employee_status,
            'current_ctc' => $request->current_ctc,
            'expected_ctc' => $request->expected_ctc,
            'experience' => $request->experience,

            'company1' => $request->company1,
            'from1' => $request->from1,
            'to1' => $request->to1,
            'accomplishments1' => $request->accomplishments1,
            'role1' => $request->role1,
            'company2' => $request->company2,
            'from2' => $request->from2,
            'to2' => $request->to2,
            'accomplishments2' => $request->accomplishments2,
            'role2' => $request->role2,
            'company3' => $request->company3,
            'from3' => $request->from3,
            'to3' => $request->to3,
            'accomplishments3' => $request->accomplishments3,
            'role3' => $request->role3,
            'company4' => $request->company4,
            'from4' => $request->from4,
            'to4' => $request->to4,
            'accomplishments4' => $request->accomplishments4,
            'role4' => $request->role4,
            'company5' => $request->company5,
            'from5' => $request->from5,
            'to5' => $request->to5,
            'accomplishments5' => $request->accomplishments5,
            'role5' => $request->role5,

            'link1' => $request->link1,
            'your_role1' => $request->your_role1,
            'skills1' => $request->skills1,
            'contribution1' => $request->contribution1,
            'link2' => $request->link2,
            'your_role2' => $request->your_role2,
            'skills2' => $request->skills2,
            'contribution2' => $request->contribution2,
            'link3' => $request->link3,
            'your_role3' => $request->your_role3,
            'skills3' => $request->skills3,
            'contribution3' => $request->contribution3,

            'skill1' => $request->skill1,
            'eval1' => $request->eval1,
            'sremarks1' => $request->sremarks1,
            'exp1' => $request->exp1,
            'skill2' => $request->skill2,
            'eval2' => $request->eval2,
            'sremarks2' => $request->sremarks2,
            'exp2' => $request->exp2,
            'skill3' => $request->skill3,
            'eval3' => $request->eval3,
            'sremarks3' => $request->sremarks3,
            'exp3' => $request->exp3,
            'skill4' => $request->skill4,
            'eval4' => $request->eval4,
            'sremarks4' => $request->sremarks4,
            'exp4' => $request->exp4,
            'skill4' => $request->skill4,
            'eval4' => $request->eval4,
            'sremarks4' => $request->sremarks4,
            'exp4' => $request->exp4,
            'skill5' => $request->skill5,
            'eval5' => $request->eval5,
            'sremarks5' => $request->sremarks5,
            'exp5' => $request->exp5,
            'skill6' => $request->skill6,
            'eval6' => $request->eval6,
            'sremarks6' => $request->sremarks6,
            'exp6' => $request->exp6,
            'skill7' => $request->skill7,
            'eval7' => $request->eval7,
            'sremarks7' => $request->sremarks7,
            'exp7' => $request->exp7,
            'skill8' => $request->skill8,
            'eval8' => $request->eval8,
            'sremarks8' => $request->sremarks8,
            'exp8' => $request->exp8,
            'skill9' => $request->skill9,
            'eval9' => $request->eval9,
            'sremarks9' => $request->sremarks9,
            'exp9' => $request->exp9,
            'skill10' => $request->skill9,
            'eval10' => $request->eval9,
            'sremarks10' => $request->sremarks9,
            'exp10' => $request->exp9,

            'add_skill1' => $request->add_skill1,
            'add_eval1' => $request->add_eval1,
            'add_sremarks1' => $request->add_sremarks1,
            'add_exp1' => $request->add_exp1,
            'add_skill2' => $request->add_skill2,
            'add_eval2' => $request->add_eval2,
            'add_sremarks2' => $request->add_sremarks2,
            'add_exp2' => $request->add_exp2,
            'add_skill3' => $request->add_skill3,
            'add_eval3' => $request->add_eval3,
            'add_sremarks3' => $request->add_sremarks3,
            'add_exp3' => $request->add_exp3,
            'add_skill4' => $request->add_skill4,
            'add_eval4' => $request->add_eval4,
            'add_sremarks4' => $request->add_sremarks4,
            'add_exp4' => $request->add_exp4,
            'add_skill5' => $request->add_skill5,
            'add_eval5' => $request->add_eval5,
            'add_sremarks5' => $request->add_sremarks5,
            'add_exp5' => $request->add_exp5,

            'ref_name' => $request->ref_name,
            'ref_number' => $request->ref_number,
            'ref_occupation' => $request->ref_occupation,
            'ref_relation' => $request->ref_relation,
            'ref_name1' => $request->ref_name1,
            'ref_number1' => $request->ref_number1,
            'ref_occupation1' => $request->ref_occupation1,
            'ref_relation1' => $request->ref_relation1,
            'ref_name2' => $request->ref_name2,
            'ref_number2' => $request->ref_number2,
            'ref_occupation2' => $request->ref_occupation2,
            'ref_relation2' => $request->ref_relation2,
            'spl_category' => $request->spl_category,
            'spl_category_details' => $request->spl_category_details,
            'partner_name' => $request->partner_name,
            'partner_number' => $request->partner_number,
            'partner_company_name' => $request->partner_company_name,
            'partner_email' => $request->partner_email,
            'avl_date' => $request->avl_date,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
        );

        $job = JobApplications::create($form_data);
        $addressInstances = [];

        foreach ($request->addmore as $key => $value) {

            $addressInstances[] = new EducationDetails($value);
        }

        $job->educationDetails()->saveMany($addressInstances);

        Mail::send(new JobSubmitUserMail($job));
        Mail::send(new JobSubmitAdminMAil($job));
        return response()->json(['success' => true]);

    }
}
