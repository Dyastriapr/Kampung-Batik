<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(Request $request)


    {
        $request->validate([
            'email' => 'required ,
            ',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();

    }
}

