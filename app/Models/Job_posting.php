<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_posting extends Model
{
    use HasFactory;
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
=======
    protected $table = 'Job_postings';
>>>>>>> CRUD_Job_By_Emloy_id
=======
    public function customers()
    {
        return $this->belongsToMany(Customer::class,'Recruitments','jobposting_id','customer_id');
    }
    
    protected $table = 'Job_postings';
>>>>>>> RUEmployer_By_ID
=======
=======
    public function empl()
    {
        return $this->belongsTo(Employer::class,'employer_id');
    }
>>>>>>> origin/detail_page
    public function customers()
    {
        return $this->belongsToMany(Customer::class,'Recruitments','jobposting_id','customer_id')
        ->withPivot('status');
    }
    
    protected $table = 'Job_postings';
<<<<<<< HEAD
>>>>>>> origin/change_password_employer
=======
>>>>>>> origin/detail_page
=======
    protected $table = 'Job_postings';
>>>>>>> origin/register_and_send_mail
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
>>>>>>> CRUD_Employer_By_ID
=======
}
>>>>>>> CRUD_Job_By_Emloy_id
=======
}
>>>>>>> RUEmployer_By_ID
=======
}
>>>>>>> origin/change_password_employer
=======
}
>>>>>>> origin/detail_page
=======
}
>>>>>>> origin/register_and_send_mail
=======
    public function empl()
    {
        return $this->belongsTo(Employer::class,'employer_id)');
    }
}
>>>>>>> origin/register_employer
