<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Iframe;

class KontenController extends Controller
{
    
    public function dashboard($id=null)
    {

        if ($id != null) {
            $iframe = Iframe::where('id',$id)->get();
            $data = [
                'link' => $iframe[0]->link,
                'name' => $iframe[0]->nama_dashboard
            ];
        } else {
            $user = auth()->user()->role_id;
            $role = Role::where('id',$user)->get();
    
            $data = [
                'link' => $role[0]->iframe[0]->link,
                'name' => $role[0]->iframe[0]->nama_dashboard
            ];
        }

        return view('konten.dashboards.dashboard',['data'=>$data]);
    }

    public function home()
    {
        return view('konten.dashboards.home');
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

