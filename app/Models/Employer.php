<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $table = 'employers';
    protected $fillable = [
        'user_id',
        'website',
        'infor',
        'responsibility',
        'welfare',
        'name_company',
        'address',
        'image',
        'email',
        'phone_number'
    ];
    public function jobs()
    {
        return $this->hasMany(Job_posting::class);
    }
}
