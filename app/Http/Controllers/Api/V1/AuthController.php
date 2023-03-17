<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
           'name'=> 'required',
           'email'=> 'required|email|unique:users',
           'password' =>'required|'
        ]);

        if ($validator->fails()){
            $response = [
                'success'=>false,
                'message'=>$validator->errors()
            ];
            return response()->json($response,400);
        }
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;

        $response = [
            'success'=>true,
            'data'=> $success,
            'message' => 'User register successfully.'
        ];

        return response()->json($response,201);

    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            $user=$request->user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;

            $response = [
                'success'=>true,
                'data'=> $success,
                'message' => 'User login successfully.'
            ];

            return response()->json($response,201);
        }else{
            $response = [
                'success'=>false,
                'message' => 'Unauthorised'
            ];

            return response()->json($response);
        }


    }
}
