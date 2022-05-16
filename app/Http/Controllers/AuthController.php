<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'paterno' => 'required|string',
            'materno' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|',
            'c_password'=>'required|same:password',
            'activo' => 'required|string',
        ]);

        $user = new User([
            'nombre' => $request->nombre,
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'activo' => $request->activo
        ]);
        if($user->save()){
            return response()->json([
                'message' => 'Usuario Creado Correctamente!'
            ], 201);
        }else{
            return response()->json(['error'=>'Error al crear el usuario'], 401);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'userId' => $user->id,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }



}
