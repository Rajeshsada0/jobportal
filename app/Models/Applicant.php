<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    public function jobs()
    {
        return $this->belongsTo(Jobmodel::class, 'job_id');
    }

    protected $fillable = [
        'name',
        'email',
        'phone',
        'resume',
        'job_id',
    ];
}
