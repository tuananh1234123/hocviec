<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Role_Permission;
use App\Repository\RoleRepository;
use App\Repository\PermissionRepository;
use App\Services\UserActivityServices;
class PermistionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $user,$role,$permission;
    private $services;
    private $action;
    public function __construct(Role_Permission $role_per_servies,PermissionRepository $permission,RoleRepository $role,UserActivityServices $action)
    {
        $this->middleware('auth');
        $this->services = $role_per_servies;
        $this->permission = $permission;
        $this->role = $role;
        $this->action = $action;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function views(){ 
     
        $role = $this->role->showAll();
        $permission = $this->permission->showAll();
        return view('managePermistion.indexPer',['permission'=>$permission,'roles'=>$role]);
    }
    public function update(Request $request){
        $this->services->updatePermission($request->roles);
        $this->action->EventAction(trans('app.update_permission'),$request);
        return  redirect('permistion/views');
    }
    public function doCreate(Request $request){
        $this->permission->create($request->name);
        $role=$this->role->finByName('admin');
        $role->givePermissionTo($request->name);
        $this->action->EventAction(trans('app.create_new_permission'),$request);
        return  redirect('permistion/views');
    }
    public function create(){
        return  view('managePermistion.viewInsert');
    }
    public function delete(Request $request){
        $this->permission->delete( $request->id);
        $this->action->EventAction(trans('app.delete_permission'),$request);
        return redirect('permistion/views');
    }
}