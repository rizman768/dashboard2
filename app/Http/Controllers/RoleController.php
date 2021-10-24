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

class RoleController extends Controller
{
    public function manajemenrole()
    {
        $role = Role::get();

        // return view('konten.manajemen_role.manajemenrole')->with(compact('role'));
        return view('konten.manajemen_role.manajemenrole',['role' => $role]);
    }

    public function tambahrole()
    {
        $iframe = Iframe::all();
        return view('konten.manajemen_role.tambahrole',['iframe'=>$iframe]);
    }

    public function storetambahrole(Request $request)
    {
        $role = Role::create([
            'level' => $request->role,
        ]);
        $role->iframe()->attach($request->iframe);
        // dd($role->id);

        return redirect()->route('manajemenrole')->with('success','Role Berhasil ditambahkan');
    }

    public function editrole($id)
    {
        $role = Role::where('id', $id)->first();
        $iframe = Iframe::all();
        return view('konten.manajemen_role.editrole')->with(compact('role','iframe'));
    }

    public function updaterole(Request $request)
    {

        $role = Role::where('id', $request->id)->update([
            'level' => $request->role,

        ]);

        Role::where('id', $request->id)->first()->iframe()->detach();
        Role::where('id', $request->id)->first()->iframe()->attach($request->iframe);

        return redirect()->route('manajemenrole')->with('success','Akun telah terupdate');
    }

    public function destroyrole($id)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $role = Role::where('id', $id)->delete();

        return redirect()->route('manajemenrole')->with('success','Role telah Terhapus');
    }
}
