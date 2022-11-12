<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'customers'; 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/change_password_employer
=======

    public function job_postings()
    {
        return $this->belongsToMany(Job_posting::class,'Recruitments','jobposting_id','customer_id')
        ->withPivot('status');
    }
>>>>>>> origin/detail_page
=======
>>>>>>> origin/register_and_send_mail
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
<<<<<<< HEAD
>>>>>>> RUEmployer_By_ID
=======
>>>>>>> origin/detail_page
=======
    protected $fillable = [
        'id','email','phone_number','fullname','gender','status'
    ];
>>>>>>> origin/register_employer
}
