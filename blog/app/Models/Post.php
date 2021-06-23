<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'description',
        'content',
        'user_id',
        'post_type_id', 
        'view',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function postType(){
        return $this->belongsTo(PostType::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function postTags(){
        return $this->hasMany(PostTag::class);
    }
}
