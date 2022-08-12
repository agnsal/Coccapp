<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\LoginRequest;
use App\Http\Requests\User\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request){
        $v = $request->validated();
        if(User::where('email', $v['email'])->first()) return response()->json(['message' => 'The email is already registered'])->setStatusCode(409);
        User::create($v);
    }

    public function login(LoginRequest $request){
        $v = $request->validated();
        $u = User::where('email', $v['email'])->first();
        $result = (null === $u || $v['password'] !== $u->password)?response()->json(['message' => 'Credentials are not valid'])->setStatusCode(403):response()->json(['message' => 'User logged in', 'token' => $u->createToken('API Token')->plainTextToken]);
        return $result;
    }

    public function logout() {
        auth()->user()->tokens()->delete();
        return response()->json(['message' => 'User logged out']);
    }
}
