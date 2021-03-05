<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class api_controller extends Controller
{
       public function createApiregister(Request $request)
    {
         $user = new User();
         $user->name = $request->name;
         $user->email = $request->email;
         $user->phone = $request->phone;
         $user->password = Hash::make($request->password);
         $user->save();

            //  $token = $this->user()->createToken('myApp')->accessToken;
            $token = $user->createToken('Token Name')->accessToken;
             return \response()->json(
                 [
                    'message'   => 'User Created Successfaly',
                    'data'      => $user,
                    'status'    => 200,
                    'Token'     => $token
                 ]);
    }
     public function login(Request $request){
     	$user = DB::table('users')->where('phone', '=', $request->phone)->get();

        // dd(Hash::make($request->password));
        if ($request->phone == $user[0]->phone && Hash::make($request->password) == $user[0]->password) {
            return 1;
        }
         $user->password = $request->password;




  $token = $user->createToken('Token Name')->accessToken;


        return Response(['User' => Auth::user(), 'Token name' => $token]);
    }



    
    }
