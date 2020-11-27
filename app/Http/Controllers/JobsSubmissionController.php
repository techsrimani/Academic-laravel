<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsSubmissionController extends Controller
{

    public function create(){

        return view('job_form');
    }
}
