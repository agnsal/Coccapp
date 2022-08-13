<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\LoginRequest;
use App\Http\Requests\User\Auth\RegisterRequest;
use App\Services\UserService;

class AuthController extends Controller
{
    public function register(RegisterRequest $request){
        $v = $request->validated();
        if(null !== UserService::findByEmail($v['email'])) return response()->json(['message' => 'The email is already registered'])->setStatusCode(409);
        UserService::create($v);
        return response()->json(['message' => 'User successfully created']);
    }

    public function login(LoginRequest $request){
        $result = !UserService::authenticate($request->validated())?response()->json(['message' => 'Credentials are not valid'])->setStatusCode(403):response()->json(['message' => 'User logged in', 'token' => UserService::makeToken()]);
        return $result;
        }

    public function logout() {
        UserService::clearTokens();
        return response()->json(['message' => 'User logged out']);
    }
}
