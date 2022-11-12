<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_posting extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
        'employer_id', 'title', 'experience', 'type', 'skill', 'required', 'salary'
    ];
=======

>>>>>>> CRUD_Employer_By_ID
    public function empl()
    {
        return $this->belongsTo(Employer::class, 'employer_id)');
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
=======
    protected $table = 'Job_postings';
>>>>>>> CRUD_Job_By_Emloy_id
    protected $fillable = [
        'employer_id',
        'title',
        'experience',
        'type',
        'skill',
        'required',
        'salary',
        'token',
    ];
<<<<<<< HEAD
}
>>>>>>> CRUD_Employer_By_ID
=======
}
>>>>>>> CRUD_Job_By_Emloy_id
