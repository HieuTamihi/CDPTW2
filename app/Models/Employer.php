<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
    protected $table = 'employers';
    protected $fillable = [
        'user_id',
>>>>>>> RUEmployer_By_ID
=======
    protected $table = 'employers';
    protected $fillable = [
        'user_id',
>>>>>>> origin/change_password_employer
=======
    protected $table = 'employers';
    protected $fillable = [
        'user_id',
>>>>>>> origin/detail_page
        'website',
        'infor',
        'responsibility',
        'welfare',
        'name_company',
        'address',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'email',
        'phone_number',
        'image'
=======
        'name_company',
        'email',
        'phone_number'
>>>>>>> CRUD_Employer_By_ID
=======
        'image',
        'email',
        'phone_number'
>>>>>>> RUEmployer_By_ID
=======
        'image',
        'email',
        'phone_number'
>>>>>>> origin/change_password_employer
=======
        'image',
        'email',
        'phone_number'
>>>>>>> origin/detail_page
=======
    protected $table = 'employers';
=======
>>>>>>> origin/register_employer
    protected $fillable = [
        'user_id',
        'name_company',
        'address',
        'image',
        'email',
        'phone_number'
<<<<<<< HEAD
>>>>>>> origin/register_and_send_mail
=======
>>>>>>> origin/register_employer
    ];
    public function jobs()
    {
        return $this->hasMany(Job_posting::class);
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/detail_page
=======
}
>>>>>>> origin/register_employer
