<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish_lists extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id','job_posting_id','number',
    ];
}
