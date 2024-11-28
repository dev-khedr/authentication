<?php

namespace App\Http\Controllers;

use App\Http\Authentication\Guardians\JwtGuardian;
use App\Http\Authentication\Guardians\SanctumGuardian;
use App\Http\Authentication\Guardians\UserGuardian;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;
use Raid\Guardian\Drivers\Contracts\DriverInterface;
use Raid\Guardian\Drivers\JwtDriver;

class JwtController extends Controller
{
    public function __construct()
    {
        app()->bind(DriverInterface::class, JwtDriver::class);
    }

    /**
     * @throws Exception
     */
    public function login(Request $request, JwtGuardian $guardian): JsonResponse
    {
        $credentials = $request->only('email', 'password');

        $authenticator = $guardian->attempt($credentials);

        return response()->json([
            'id' => $authenticator->getAuthenticatable('id'),
            'name' => $authenticator->getAuthenticatable('name'),
            'token' => $authenticator->getToken(),
        ]);
    }
}