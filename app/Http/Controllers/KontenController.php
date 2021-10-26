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
        return view('konten.dashboards.dashboard',['role'=>$role]);
    }

    public function db_coziness()
    {
    	$user = auth()->user()->role_id;
        $role = Role::find(1)->where('id',$user)->get();

        return view('konten.dashboards.db_coziness',['role'=>$role]);
    }
    
    public function db_cumulativecounting()
    {
    	$user = auth()->user()->role_id;
        $role = Role::find(1)->where('id',$user)->get();

        return view('konten.dashboards.db_cumulativecounting',['role'=>$role]);
    }

    public function db_facerecognition()
    {
    	$user = auth()->user()->role_id;
        $role = Role::find(1)->where('id',$user)->get();

        return view('konten.dashboards.db_facerecognition',['role'=>$role]);
    }

    public function db_safesecure()
    {
    	$user = auth()->user()->role_id;
        $role = Role::find(1)->where('id',$user)->get();

        return view('konten.dashboards.db_safesecure',['role'=>$role]);
    }

    public function db_saranaprasarana()
    {
    	$user = auth()->user()->role_id;
        $role = Role::find(1)->where('id',$user)->get();

        return view('konten.dashboards.db_saranaprasarana',['role'=>$role]);
    }

    public function db_socialdistencing()
    {
    	$user = auth()->user()->role_id;
        $role = Role::find(1)->where('id',$user)->get();

        return view('konten.dashboards.db_socialdistencing',['role'=>$role]);
    }

    public function db_sosialmedia()
    {
    	$user = auth()->user()->role_id;
        $role = Role::find(1)->where('id',$user)->get();

        return view('konten.dashboards.db_sosialmedia',['role'=>$role]);
    }
}

