<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return response(['message' =>'LOGIN']);
        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     $user = Auth::user();
        //     $token = $user->createToken('MyApp')->accessToken;
        //     return response()->json(['token' => $token], 200);
        // } else {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }
    }
}
