<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Carbon\Carbon;

>>>>>>> blog_home
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'title', 'comment_id', 'customer_id', 'slug', 'content', 'image', 'view', 'created_at'
    ];
}
