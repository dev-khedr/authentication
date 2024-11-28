<?php

namespace App\Http\Controllers;

use App\Http\Authentication\Guardians\UserGuardian;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;

class UserController extends Controller
{
    /**
     * @throws Exception
     */
    public function login(Request $request, UserGuardian $guardian): JsonResponse
    {
        $credentials = $request->only('email', 'password');

        $authenticator = $guardian->attempt($credentials);

        return response()->json([
            'id' => $authenticator->getAuthenticatable('id'),
            'name' => $authenticator->getAuthenticatable('name'),
            'token' => $authenticator->getStringToken(),
        ]);
    }
}
