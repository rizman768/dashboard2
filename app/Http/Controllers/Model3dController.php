<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Model3d;

class Model3dController extends Controller
{
    public function manajemenmodel3d()
    {
        $model3d = Model3d::all();
        return view('konten.manajemen_model3d.manajemenmodel3d')->with(compact('model3d'));
    }

    public function tambahmodel3d()
    {
        return view('konten.manajemen_model3d.tambahmodel3d');
    }

     public function storetambahmodel3d(Request $request)
    {
        $this->validate($request, [
            'model3d' => 'required',
            'link' => 'required',
        ]);

        Model3d::create([
            'model3d' => $request->model3d,
            'link' => $request->link,
        ]);

        return redirect()->route('manajemenmodel3d')->with('success','Model 3D Berhasil ditambahkan');
    }

    public function editmodel3d($id)
    {
        $model3d = Model3d::where('id', $id)->first();
        return view('konten.manajemen_model3d.editmodel3d')->with(compact('model3d'));
    }

    public function updatemodel3d(Request $request)
    {        
        $model3d = Model3d::where('id', $request->id)->update([
            'model3d' => $request->model3d,
            'link' => $request->link,

        ]);

        return redirect()->route('manajemenmodel3d')->with('success','Model 3D telah terupdate');
    }

    public function destroymodel3d($id)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $model3d = Model3d::where('id', $id)->delete();

        return redirect()->route('manajemenmodel3d')->with('success','Model 3D telah Terhapus');
    }

}
