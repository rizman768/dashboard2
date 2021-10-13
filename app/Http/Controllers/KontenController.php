<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontenController extends Controller
{
    
    public function dashboard(){
        return view('konten.dashboard');
    }
}
