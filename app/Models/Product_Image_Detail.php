<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Image_Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_image_id'
    ];
}
