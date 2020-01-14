<?php

namespace App\Http\Controllers;
use App\Services\UserActivityServices;
use Illuminate\Http\Request;
use  App\Services\Role_Permission;
use  App\Repository\UsersRepository;
use  App\Repository\RoleRepository;
use  App\validation\UserValidation;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     private $user;
     private $role;
    private $validate;
    private $action;
    public function __construct(UsersRepository $user,RoleRepository $role,UserValidation $validate,UserActivityServices $action)
    {
        $this->middleware('auth');
        $this->user = $user;
        $this->role = $role;
        $this->validate= $validate;
        $this->action=$action;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function views(){  
    $user= $this->user->showAllUsers();
    return view('manageUsers.index',['users'=>$user]);
    }
    
    public function goCreate(){  
        return view('manageUsers.insert');
    }

    public function doCreate(Request $request){
        $this->validate->validate($request);
        $this->user->create($request->all());
        $this->action->EventAction(trans('app.create_new_user'),$request);
        return redirect('/user');    
    }

    public function goUpdate(Request $request){ 
        $user=$this->user->goEdit($request->id);
        $roles = $this->role->showAll();
        return view('manageUsers.editUsers',["user"=> $user,"roles"=>$roles]);   
    }

    public function update(Request $request){   
        $this->validate->validateEdit($request);
        $this->user->edit($request->id,$request->all(),$request->roles_id);
        $this->action->EventAction(trans('app.edit_user_details'),$request);
        return redirect('/user');   
    }
    
    public function delete(Request $request){ 
        $this->user->delete($request->id);
        $this->action->EventAction(trans('app.delete_user'),$request);
        return redirect('/user');   
    }

}