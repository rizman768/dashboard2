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
        return view('konten.manajemen_iframe.manajemeniframe')->with(compact('model3d'));
    }
}
