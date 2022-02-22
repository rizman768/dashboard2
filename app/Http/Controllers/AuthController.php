<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
use App\Models\Iframe;
use Validator;

class AuthController extends Controller
{

    public function index(){
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('auths.login');
    }

    public function login(Request $request){
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/home');
        }
        Session::flash('error', 'Email atau Password Salah');
        // dd([$request->email,$request->password]);
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function register(){
        return view('auths.register');
    }

    public function user_registration(Request $request){

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'role_id' => 1,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect()->route('login')->with('success','Akun Anda Berhasil dibuat');
    }
}