<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    public function employer()
    {
      return $this->hasOne(Employer::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'customer_id', 
        'email',
=======
        'email',
        'user_id', 
        'customer_id', 
>>>>>>> origin/confirm_email
=======
        'customer_id', 
        'email',
>>>>>>> origin/detail_page
=======
        'customer_id', 
        'email',
>>>>>>> origin/register_and_send_mail
        'phone', 
        'password', 
        'role', 
        'status',
        'confirm'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
