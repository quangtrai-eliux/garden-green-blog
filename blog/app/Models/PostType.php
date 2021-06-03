<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    use HasFactory;
    protected $table = 'post_type';
    protected $fillable = [
        'post_type_name', 
        'category_id',
    ];
}
