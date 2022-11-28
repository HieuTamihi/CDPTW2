<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'customer_id','namecv', 'fullname', 'avatar', 'apply_position', 'email', 'phone_number', 'date', 'introduce', 'exp_work', 'school_name', 'learn_time', 'majors', 'infor_other','status'
    ];
}
