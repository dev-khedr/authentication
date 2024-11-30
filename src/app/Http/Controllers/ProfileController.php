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

class ProfileController extends Controller
{
    /**
     * @throws Exception
     */
    public function get(): JsonResponse
    {
        return response()->json([
            'resource' => auth()->user()->toArray(),
        ]);
    }
}
