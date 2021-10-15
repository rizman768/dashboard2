<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class KontenController extends Controller
{
    
    public function dashboard(){
        return view('konten.dashboard');
    }

    public function manajemenuser(){
        $users = User::all();


        return view('konten.manajemenuser')->with(compact('users'));
    }
}
