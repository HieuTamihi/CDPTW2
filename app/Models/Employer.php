<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function jobs()
    {
        return $this->hasMany(Job_posting::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
    protected $table = 'employers';
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
        'image',
    ];
    public function scopeSearch($query)
    {
        if ($key = request()->key) {
            $employers = $query->where('name_company', 'like', '%' . $key . '%');
        }
        return $query;
    }
}