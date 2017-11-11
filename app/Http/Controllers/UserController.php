<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
     public function signup (Request $request) {      // регистрация пользователя

         $this->validate($request, [
             'name' => 'required',
             'surname' => 'required',
             'patronymic'  => 'required',
             'sex' => 'required',
             'birthday' => 'required|date',
             'country' => 'required',
             'city' => 'required',
             'telephone' => 'required',
             'email' => 'required|email|unique:users',
             'password' => 'required|max:32'
         ]);

         $user = new User([
             'name' => $request->input('name'),
             'surname' => $request->input('surname'),
             'patronymic' => $request->input('patronymic'),
             'sex' => $request->input('sex'),
             'birthday' => $request->input('birthday'),
             'country' => $request->input('country'),
             'city' => $request->input('city'),
             'telephone' => $request->input('telephone'),
             'email' => $request->input('email'),
             'password' => bcrypt($request->input('password'))
         ]);

         $user->save();

         return response()->json([
             'message' => 'Successfully'
         ], 201);
     }

     public function signin(Request $request)
     {
         /*
          * $user = JWTAuth::parseToken()->toUser(); - останется ...
          *
          * if (!$user = JWTAuth::parseToken()->authenticate()) {
          *     return response()->json(['message' => 'User not found', 404]);
          * }   вместо него middleware jwt.auth ...
          */

         $this->validate($request, [
             'email' => 'required|email', //не unique потому что пользователь не должен этого знать
             'password' => 'required|max:32'
         ]);

         $credentials = $request->only('email', 'password');

         try{
             if(!$token = JWTAuth::attempt($credentials)){
                 return response()->json([
                     'error' => 'Invalid credentials'
                 ], 401);
             }

         } catch (JWTException $e) {
             return response()->json([
                 'error' => 'Cant created token'
             ], 500);
         }

         return response()->json([
             'token' => $token,
             'message' => 'Successfully'
         ], 200);

     }
}
