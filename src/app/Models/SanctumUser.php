<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Raid\Guardian\Authenticatable\Contracts\AuthenticatableInterface;
use Tymon\JWTAuth\Contracts\JWTSubject;

class SanctumUser extends User
{
    use HasApiTokens;
}
