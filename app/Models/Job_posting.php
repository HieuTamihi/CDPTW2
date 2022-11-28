<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job_posting extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    public function empl()
    {
        return $this->belongsTo(Employer::class, 'employer_id');
    }
    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'Recruitments', 'jobposting_id', 'customer_id')->withPivot('status');
    }
    protected $table = 'Job_postings';
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
    public function scopeSearch($query)
    {
        if ($key = request()->key) {
            $job_postings = $query->where('title', 'like', '%' . $key . '%');
        }
        return $query;
    }
}