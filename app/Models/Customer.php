<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
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
    public function scopeSearch($query)
    {
        if ($key = request()->key) {
            $customers = $query->where('email', 'like', '%' . $key . '%');
        }
        return $query;
    }
