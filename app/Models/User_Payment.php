<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name_payment',
        'provide',
        'type',
        'expired',
        'qr'
    ];
}
