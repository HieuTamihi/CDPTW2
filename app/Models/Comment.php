<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'comments';
    protected $dates = ['deleted_at'];


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
