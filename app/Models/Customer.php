<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class, 'comment_id', 'id');
    // }
}
