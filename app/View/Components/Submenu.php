<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Role;

class Submenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $user = auth()->user()->role_id;
        $role = Role::where('id',$user)->get();

        return view('components.submenu',['role'=>$role]);
    }
}
