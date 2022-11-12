<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    public function job_postings()
    {
        return $this->belongsToMany(Job_posting::class, 'Recruitments', 'jobposting_id', 'customer_id')
            ->withPivot('status');
    }
    protected $fillable = [
        'id',
        'email',
        'phone_number',
        'fullname',
        'date',
        'address',
        'gender',
        'favorite',
        'status',
    ];
    // protected $fillable = [
    //     'id', 'email', 'phone_number', 'fullname', 'gender', 'status'
    // ];
}
