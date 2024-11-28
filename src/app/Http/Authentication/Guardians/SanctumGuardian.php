<?php

namespace App\Http\Authentication\Guardians;

use App\Models\SanctumUser;
use App\Models\User;
use Raid\Guardian\Guardians\Guardian;
use Raid\Guardian\Guardians\Contracts\GuardianInterface;

class SanctumGuardian extends Guardian implements GuardianInterface
{
    public const NAME = 'sanctum-user';

    protected string $authenticatable = SanctumUser::class;

    protected array $authenticators = [];
}
