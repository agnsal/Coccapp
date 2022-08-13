<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public static function create($userDetails){
        $userDetails['password'] = Hash::make($userDetails['password']);
        User::create($userDetails);
    }

    public static function findByEmail($email){
        return User::where('email', $email)->first();
    }

    public static function authenticate($userDetails){
        return Auth::attempt($userDetails);
        // OLD (verbose version)
//        $v = $request->validated();
//        $u = User::where('email', $v['email'])->first();
//        return (null === $u || !Hash::check($v['password'], $u->password));
    }

    public static function makeToken(){
        return explode('|', auth()->user()->createToken('API Token')->plainTextToken)[1];
    }

    public static function clearTokens(){
        auth()->user()->tokens()->delete();
    }

}
