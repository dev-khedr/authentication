<?php

namespace App\Models;


use Laravel\Passport\HasApiTokens;

class PassportUser extends User
{
    use HasApiTokens;
}
