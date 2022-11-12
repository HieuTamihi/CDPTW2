<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers'; 
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/change_password_employer
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
>>>>>>> RUEmployer_By_ID
}
