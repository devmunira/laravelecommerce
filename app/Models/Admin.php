<?php

namespace App\Models;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticated
{
    use HasFactory;
    use HasApiTokens;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;


    protected $fillable = [
        'name','email','password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes','two_factor_secret'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];
}
