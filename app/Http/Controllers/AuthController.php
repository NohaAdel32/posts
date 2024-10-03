<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $token = $user->createToken($request->name)->plainTextToken;

        return[
           'user'=> $user,
           'token'=> $token
        ];
    } 


    public function login(Request $request)
    {
       $data= $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'exists:users'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $data['email'])->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'Data Not found'
            ],401);
        }
       
        $token = $user->createToken($user->name)->plainTextToken;
        return[
           'user'=> $user,
           'token'=> $token
        ];
    } 
    
    public function logout(Request $request)
{
    
   $request->user()->currentAccessToken()->delete();

    return response()->json([
        'message' => 'Successfully logged out'
    ]);
    
}
}
