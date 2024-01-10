<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helio extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'video',
        'image',
        'is_video',
        'slug',
        'status', 
    ];
}