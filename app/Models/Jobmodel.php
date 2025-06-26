<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobmodel extends Model
{
    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'job_id');
    }
    protected $fillable = ['title', 'description', 'location', 'salary', 'deadline'];
}
