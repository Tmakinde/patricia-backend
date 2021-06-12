<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Hash;
use Auth;
use Exception;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth:api');
    }
    
    public function index(){
        return response()->json([
            "user" => auth()->user(),
        ], 200);
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [

            'email' => ['email',
                    Rule::unique('users')->where(function($query){
                        return $query->where('id', '!=', auth()->user()->id);
                    })
                ],

            'username' => [
                Rule::unique('users')->where(function($query){
                    return $query->where('id', '!=', auth()->user()->id);
                })
            ],

        ]);

        if ($validator->passes()) {
            if ($request->has('email')) {
                auth()->user()->update([
                    "email" => $request->email
                ]);
            }

            if ($request->has('username')) {
                auth()->user()->update([
                    "username" => $request->username
                ]);
            }

            if ($request->has('password')) {
                auth()->user()->update([
                    "password" => Hash::make($request->password),
                ]);
            }

            if (empty($request->has('password')) && empty($request->has('email')) && empty($request->has('username'))) {
                return response()->json([
                    "message" => "bad request",
                ], 400);
            }
            return response()->json([
                "message" => "user's details successfully updated",
            ], 200);
        }

        return response()->json([
            "message" => $validator->errors(),
        ], 400);

    }

    public function destroy(Request $request){
        auth()->user()->delete();
        return response()->json([
            "user" => "user successfully deleted",
        ], 200);
    }

}
