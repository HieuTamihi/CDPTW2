<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'website',
        'infor',
        'responsibility',
        'welfare',
        'name_company',
        'address',
        'email',
        'phone_number',
        'image'
    ];
    public function jobs()
    {
        return $this->hasMany(Job_posting::class);
    }
}