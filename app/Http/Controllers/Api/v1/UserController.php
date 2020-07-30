<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        return 'register';
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response([
                'status_code' => 403,
                'message' => 'validation failed',
                'errors' => $validator->errors(),
            ]);
        }

        if (!Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            return response([
                'status_code' => 401,
                'message' => 'Invalid email or password',
                'data' => null,
            ]);
        }

        $user = Auth::user();

        $access_token = $user->createToken('authToken')->accessToken;

        return response([
            'status_code' => 200,
            'token' => $access_token,
        ]); 
    }

    public function logout()
    {
        auth()->logout();
    }

}
