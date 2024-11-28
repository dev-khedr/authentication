<?php

namespace App\Http\Authentication\Guardians;

use App\Models\JwtUser;
use App\Models\User;
use Raid\Guardian\Guardians\Guardian;
use Raid\Guardian\Guardians\Contracts\GuardianInterface;

class JwtGuardian extends Guardian implements GuardianInterface
{
    public const NAME = 'jwt-user';

    protected string $authenticatable = JwtUser::class;

    protected array $authenticators = [];
}
