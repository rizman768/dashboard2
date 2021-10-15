<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;
use App\Models\User;
use Validator;

class AuthController extends Controller
{
    public function index(){
        return view('auths.login');
    }

    public function register(){
        return view('auths.register');
    }

    public function storeregister(Request $request){

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'level' => 'user',
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        // $request->validate([
        //     'confirmpassword' => 'password',
        // ]);

        return redirect()->route('login')->with('success','Akun Anda Berhasil dibuat');
        
    }

    public function login(Request $request){
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }
        Session::flash('error', 'Email atau Password Salah');
        return redirect('/login');
    }


    public function update(Request $request){
        $users->update($request->all());

        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}