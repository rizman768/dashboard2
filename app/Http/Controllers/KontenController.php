<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Iframe;

class KontenController extends Controller
{
    
    public function dashboard(){
        return view('konten.dashboard');
    }

    public function manajemenuser(){
        $users = User::all();

        return view('konten.manajemen_user.manajemenuser')->with(compact('users'));
    }

    public function tambahuser(){
        return view('konten.manajemen_user.tambahuser');
    }

    public function manajemenrole(){
        $role = Role::all();

        return view('konten.manajemen_role.manajemenrole')->with(compact('role'));
    }

    public function tambahrole(){
        return view('konten.manajemen_role.tambahrole');
    }

    public function manajemeniframe(){
        $iframe = Iframe::all();

        return view('konten.manajemen_iframe.manajemeniframe')->with(compact('iframe'));
    }

    public function tambahiframe(){
        return view('konten.manajemen_iframe.tambahiframe');
    }

    public function storetambahiframe(Request $request){

        Iframe::create([
            'nama_dashboard' => $request->nama_dashboard,
            'link' => $request->link,
        ]);

        return redirect()->route('manajemeniframe')->with('success','Iframe Berhasil ditambahkan');
    }

    public function editiframe($id){
        $iframe = Iframe::where('id', $id)->first();
        return view('konten.manajemen_iframe.editiframe')->with(compact('iframe'));
    }

    public function updateiframe(Request $request){
        $this->validate($request, [
            'nama_dashboard' => 'required',
            'link' => 'required',
        ]);
        
        $iframe = Iframe::where('id', $request->id)->update([
            'nama_dashboard' => $request->nama_dashboard,
            'link' => $request->link,

        ]);

        return redirect()->route('manajemeniframe')->with('success','Iframe telah terupdate');
    }

    public function destroyiframe($id)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $iframe = Iframe::where('id', $id)->delete();
  
        return redirect()->route('manajemeniframe')->with('success','Iframe telah Terhapus');
    }
}
