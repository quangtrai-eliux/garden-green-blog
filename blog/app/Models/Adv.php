<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adv extends Model
{
    use HasFactory;
    protected $table = 'advs';
    protected $fillable = [
        'number_block', 
        'uri',
        'description',
    ];
}
