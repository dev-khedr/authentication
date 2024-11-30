<?php

namespace App\Http\Authentication\Guardians;

use App\Models\PassportUser;
use App\Models\SanctumUser;
use App\Models\User;
use Raid\Guardian\Guardians\Guardian;
use Raid\Guardian\Guardians\Contracts\GuardianInterface;

class PassportGuardian extends Guardian implements GuardianInterface
{
    public const NAME = 'passport-user';

    protected string $authenticatable = PassportUser::class;

    protected array $authenticators = [];
}
