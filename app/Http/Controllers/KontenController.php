<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Iframe;

class KontenController extends Controller
{
    
    public function dashboard()
    {
        $user = auth()->user()->role_id;
        $role = Role::find(1)->where('id',$user)->get();
        // dd($role);
        return view('konten.dashboard',['role'=>$role]);
    }
    
}
