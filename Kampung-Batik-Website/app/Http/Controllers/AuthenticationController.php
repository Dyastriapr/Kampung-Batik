<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{

    public function login(){
        return view('authentications.signin',[
            "title" => "login"
        ]);
    }

    public function register(){
        return view('authentications.register',[
            "title" => "daftar"
        ]);
    }

    public function indexregister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            // 'confirm_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken('auth_token')->plainTextToken;
        $success['name'] = $user->name;

        Session::flash('success', 'Pendaftaran akun berhasil');
        return view('authentications.signin')->with("title", "Daftar");
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Sukses register',
        //     'data' => $success
        // ]);

    }

    public function indexlogin(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $auth = Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken;
            $success['name'] = $auth->name;
            $success['email'] = $auth->email;

            // dd($auth);
            return view("beranda.beranda")->with("title", "Beranda");
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Cek email dan password lagi',
                'data' => null
            ]);
        }
    }
}

