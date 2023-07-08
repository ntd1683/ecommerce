<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_code',
        'amount',
        'provider',
        'status',
        'code'
    ];
}
