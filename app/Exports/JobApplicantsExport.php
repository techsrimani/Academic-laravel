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
}
