<?php

namespace App\Http\Controllers;
use  App\validation\RoleValidation;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use  App\Services\Role_Permission;
use  App\Repository\RoleRepository;
use App\Services\UserActivityServices;
class roleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $roleRep;
    private $services;
    private $validate;
    private $action;
    public function __construct(Role_Permission $role_per_servies,RoleRepository $roleRep,RoleValidation $validate,UserActivityServices $action)
    {
        $this->middleware('auth');
        $this->services = $role_per_servies;
        $this->roleRep = $roleRep;
        $this->validate = $validate;
        $this->action = $action;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function views(){  
    $role= $this->roleRep->showAll();
    return view('roles.index',['roles'=>$role]);
    }

    public function create(){  
        return view('roles.viewCreate');
    }
    public function doCreate(Request $request){
        $this->validate->validate($request);
        $this->roleRep->create($request->name);
        $this->action->EventAction(trans('app.create_new_role'),$request);
        return redirect('/role');    
  }
    public function goUpdate(Request $request){ 
        $role=$this->roleRep->findById($request->id);
        return view('roles.ViewsEdit',["roles"=> $role]);
    
    }
    public function update(Request $request){ 
        $this->validate->validate($request);
        $this->roleRep->edit($request->id,$request->all());
        $this->action->EventAction(trans('app.update_role'),$request);
        return redirect('/role');   
    }
    public function delete(Request $request){ 
        $this->roleRep->delete($request->id);
        $this->action->EventAction(trans('app.delete_role'),$request);
        return redirect('/role');   
    }

}