<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return View::make('booter.user.user');
    }
    
    public function createUser(Request $request) {
        if (!empty($request)) {
            $user = User::create($request);
            return 'ok';
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
