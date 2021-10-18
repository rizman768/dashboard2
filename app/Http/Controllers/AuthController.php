<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
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
            'role_id' => 2,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        // $request->validate([
        //     'confirmpassword' => 'password',
        // ]);

        return redirect()->route('login')->with('success','Akun Anda Berhasil dibuat');
    }

    public function storetambahuser(Request $request){

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect()->route('manajemenuser')->with('success','Akun Anda Berhasil dibuat');
    }

        public function storetambahrole(Request $request){

        Role::create([
            'role' => $request->role,
        ]);

        return redirect()->route('manajemenrole')->with('success','Akun Anda Berhasil dibuat');
    }

    public function login(Request $request){
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }
        Session::flash('error', 'Email atau Password Salah');
        return redirect('/login');
    }

    public function edituser(){
        return view('konten.Manajemen User.edituser')->with(compact('users'));
    }

      public function editrole(){
        return view('konten.Manajemen Role.editrole')->with(compact('role'));
    }


    public function updateuser(Request $request){
        $users->update($request->all());

        return redirect()->route('manajemenuser')->with('success','Akun telah terupdate');
    }


    public function updaterole(Request $request){
        $role->update($request->all());

        return redirect()->route('manajemenrole')->with('success','Akun telah terupdate');
    }

    public function destroy(User $id)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $users = User::where('id', $id)->delete();
  
        // return redirect()->route('manajemenuser')->with('success','Akun telah Terhapus');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}