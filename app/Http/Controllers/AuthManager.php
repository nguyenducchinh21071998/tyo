<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class AuthManager extends Controller
{
    use HasApiTokens;
    public function login() {
        return 23;
    }
    public function loginPost(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return 'ok';
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
