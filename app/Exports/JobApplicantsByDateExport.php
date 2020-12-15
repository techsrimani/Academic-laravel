<?php

namespace App\Exports;

use App\Models\JobApplications;
use Maatwebsite\Excel\Concerns\FromCollection;

class JobApplicantsByDateExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $startDate = request()->input('from');
        $endDate   = request()->input('to');
        $applications = JobApplications::whereBetween('created_at', [$startDate, $endDate])
            ->get();
        return $applications;
    }
}
