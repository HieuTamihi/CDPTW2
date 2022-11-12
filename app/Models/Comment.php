<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    public $timestamps = true;
    protected $fillable = [
        'post_id', 'customer_id', 'title', 'comment', 'created_at'
    ];


    public function customers()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
