<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title', 'comment_id', 'customer_id', 'content', 'image', 'view', 'created_at'
    ];

    public function comments()
    {
        return $this->hasOne(Comment::class, 'post_id', 'id');
    }
}
