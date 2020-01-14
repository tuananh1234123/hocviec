<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $per,$role;
    public function __construct(Permission $per,Role $role)
    {   $this->per = $per;
        $this->role = $role;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
       
   // auth()->user()->assignRole('admin');add role 
        


//    $user = auth()->user()->getRoleNames();
//    $role = Role::findByName('admin');
//     $role->givePermissionTo(Permission::all());

//    echo $role->getAllPermissions();

// echo auth()->user()->getRoleNames();;
        return view('home.home');
    }
}