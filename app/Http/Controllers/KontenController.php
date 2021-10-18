<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class KontenController extends Controller
{
    
    public function dashboard(){
        return view('konten.dashboard');
    }

    public function manajemenuser(){
        $users = User::all();

        return view('konten.Manajemen User.manajemenuser')->with(compact('users'));
    }

     public function tambahuser(){
        return view('konten.Manajemen User.tambahuser');
    }

    public function manajemenrole(){
        $role = Role::all();

        return view('konten.Manajemen Role.manajemenrole')->with(compact('role'));
    }

    public function tambahrole(){
        return view('konten.Manajemen Role.tambahrole');
    }
}
