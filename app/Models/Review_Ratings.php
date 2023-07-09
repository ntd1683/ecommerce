<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review_Ratings extends Model
{
    use HasFactory;

    protected $fillable = [
        'product',
        'user',
        'comment',
        'star_rating',
        'status'
    ];
}