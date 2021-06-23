<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    use HasFactory;
    protected $table = 'post_types';
    protected $fillable = [
        'post_type_name', 
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
