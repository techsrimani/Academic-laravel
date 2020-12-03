<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDetails extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobApplications(){
        return $this->belongsTo('App\Models\JobApplications');
    }
}
