<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\LoginRequest;
use App\Http\Requests\User\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request){
        $v = $request->validated();
        if(User::where('email', $v['email'])->first()) return response()->json(['message' => 'The email is already registered'])->setStatusCode(409);
        User::create($v);
    }

    public function login(LoginRequest $request){
        $result = !Auth::attempt($request->validated())?response()->json(['message' => 'Credentials are not valid'])->setStatusCode(403):response()->json(['message' => 'User logged in', 'token' => auth()->user()->createToken('API Token')->plainTextToken]);
        return $result;
        // OLD (verbose version)
//        $v = $request->validated();
//        $u = User::where('email', $v['email'])->first();
//        $result = (null === $u || !Hash::check($v['password'], $u->password))?response()->json(['message' => 'Credentials are not valid'])->setStatusCode(403):response()->json(['message' => 'User logged in', 'token' => $u->createToken('API Token')->plainTextToken]);
    }

    public function logout() {
        auth()->user()->tokens()->delete();
        return response()->json(['message' => 'User logged out']);
    }
}
