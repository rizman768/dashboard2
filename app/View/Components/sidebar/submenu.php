<?php

namespace App\View\Components\sidebar;

use Auth;
use App\Models\Role;
use Illuminate\View\Component;

class submenu extends Component
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
        $user = Auth::user()->role_id;
        $role = Role::find(1)->where('id',$user)->get();

        return view('components.sidebar.submenu',['role'=>$role]);
    }
}
