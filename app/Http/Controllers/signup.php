<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class signup extends Controller
{
    public function store(Request $request)
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
