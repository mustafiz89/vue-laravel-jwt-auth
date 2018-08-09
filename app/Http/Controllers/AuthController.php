<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;

class AuthController extends Controller
{
    public function userLogin(Request $request){
    	$credentials = $request->only('email', 'password');
		try {
			$token = JWTAuth::attempt($credentials);
			if (!$token) {
				return response()->json(['error' => 'Invalid Login! Try again'], 401);
			}
		} catch (JWTException $e) {
			return response()->json(['error' => "Couldn't create token"], 500);
		}
		return response()->json(compact('token'));
    }
}
