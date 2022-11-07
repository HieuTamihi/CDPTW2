<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    public function jobs()
    {
        return $this->hasMany(Job_posting::class);
    }
    public function user()
    {
      return $this->hasOne(User::class);
    }
    protected $fillable = [
        'user_id',
        'name_company',
        'email',
        'phone_number'
    ];
}
