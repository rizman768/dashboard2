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
        return view('konten.dashboard');
    }
    
}
