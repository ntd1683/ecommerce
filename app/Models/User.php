<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'birthdate',
        'gender',
        'level',
        'phone',
        'avatar_url',
        'email_verified',
        'phone_verified',
        'remember_token',
    ];

    public $timestamps = true;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected function avatarUrl(): Attribute
    {
        return Attribute::get(function () {
            if ($this->avatar === null) {
                $name = explode(' ', $this->name);
                return 'https://ui-avatars.com/api/?background=random&name=' . urlencode(end($name));
            }

            return Storage::url($this->avatar);
        })->shouldCache();
    }

    protected function keyLevel(): Attribute
    {
        return Attribute::get(function () {
            $value = $this->level ?? 0;
            return UserLevelEnum::getKeyByValue($value);
        });
    }
}
