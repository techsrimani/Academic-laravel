<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplications extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function educationDetails(){
        return $this->hasMany('App\Models\EducationDetails');
    }
}
