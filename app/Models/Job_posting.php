<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_posting extends Model
{
    use HasFactory;

    public function empl()
    {
        return $this->belongsTo(Employer::class, 'employer_id)');
    }
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
