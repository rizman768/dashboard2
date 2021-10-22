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
        $role = Role::all();

        return view('konten.manajemen_role.manajemenrole')->with(compact('role'));
    }

    public function tambahrole()
    {
        return view('konten.manajemen_role.tambahrole');
    }

    public function storetambahrole(Request $request)
    {
        Role::create([
            'level' => $request->role,
        ]);

        return redirect()->route('manajemenrole')->with('success','Role Berhasil ditambahkan');
    }

    public function editrole($id)
    {
        $role = Role::where('id', $id)->first();
        return view('konten.manajemen_role.editrole')->with(compact('role'));
    }

    public function updaterole(Request $request)
    {

        $role = Role::where('id', $request->id)->update([
            'level' => $request->role,

        ]);

        return redirect()->route('manajemenrole')->with('success','Akun telah terupdate');
    }

    public function destroyrole($id)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $role = Role::where('id', $id)->delete();

        return redirect()->route('manajemenrole')->with('success','Role telah Terhapus');
    }
}
