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

class IframeController extends Controller
{
    public function manajemeniframe()
    {
        $iframe = Iframe::all();

        return view('konten.manajemen_iframe.manajemeniframe')->with(compact('iframe'));
        return view('layouts.sidebar')->with(compact('role'));
    }

    public function tambahiframe()
    {
        return view('konten.manajemen_iframe.tambahiframe');
    }

    public function storetambahiframe(Request $request)
    {
        $this->validate($request, [
            'nama_dashboard' => 'required',
            'link' => 'required',
        ]);

        Iframe::create([
            'nama_dashboard' => $request->nama_dashboard,
            'link' => $request->link,
        ]);

        return redirect()->route('manajemeniframe')->with('success','Iframe Berhasil ditambahkan');
    }

    public function editiframe($id)
    {
        $iframe = Iframe::where('id', $id)->first();
        return view('konten.manajemen_iframe.editiframe')->with(compact('iframe'));
    }

    public function updateiframe(Request $request)
    {        
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
