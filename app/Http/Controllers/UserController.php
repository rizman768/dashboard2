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

class UserController extends Controller
{

    public function manajemenuser(){
        $users = User::all();

        // dd($users);
        return view('konten.manajemen_user.manajemenuser')->with(compact('users'));
    }

    public function tambahuser()
    {
        $role = Role::all();
        return view('konten.manajemen_user.tambahuser',['role' => $role]);
    }

    public function create(Request $request)
    {
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect()->route('manajemenuser')->with('success','Akun Anda Berhasil dibuat');
    }


    public function update(Request $request)
    {

        $users = User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'remember_token' => Str::random(60),
        ]);

        return redirect()->route('manajemenuser')->with('success','Akun telah terupdate');
    }

    public function edituser($id)
    {
        $users = User::where('id', $id)->first();
        $role = Role::all();
        return view('konten.manajemen_user.edituser')->with(compact('users','role'));
    }

    public function delete($id)
    {
        $users = User::where('id', $id)->delete();

        return redirect()->route('manajemenuser')->with('success','Akun telah Terhapus');
    }


}
