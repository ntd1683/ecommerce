<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Contracts\Database\Query\Builder;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'percent',
        'active',
        'expired',
        'type',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function products(): HasOne
    {
        return $this->hasOne(Product::class);
    }

    public function scopeActived(Builder $query): void
    {
        $query->where('active', true);
    }

    public function scopeExpired(Builder $query): void
    {
        $query->where('expired', '>=', today('Asia/Jakarta'));
    }
}
