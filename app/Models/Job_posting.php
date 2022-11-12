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
}
=======
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
}
>>>>>>> CRUD_Employer_By_ID
