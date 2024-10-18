<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'prenom'=>'required',
            'phone_number'=>'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);
        $user = User::create([
            'name' => $request->name,
            'prenom'=>$request->prenom,
            'phone_number'=>$request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);



        $token = $user->createToken('token-name')->plainTextToken;
        return response()->json([
            'status' => true,
            'message' => 'User Created Successfully',
            'token' => $token
        ], 200);
    }
}
