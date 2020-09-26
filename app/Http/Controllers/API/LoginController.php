<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        $data = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:3|max:12'
        ]);

        // dd(Auth::attempt($data));  

        if(Auth::attempt($data)){
            return  response()->json(['success' => 'you are logged In'], 200);
        }else{
            return response()->json(['erro' => 'Invaid Credentials'], 401);
        }
    }
}
