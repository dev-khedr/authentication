<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Raid\Guardian\Authenticatable\Contracts\AuthenticatableInterface;
use Tymon\JWTAuth\Contracts\JWTSubject;

class JwtUser extends User implements JWTSubject
{
    public function getJWTIdentifier(): string
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims(): array
    {
        return [];
    }
}
