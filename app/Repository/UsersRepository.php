<?php

namespace App\Repository;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 
use Spatie\Permission\Models\Role;
class UsersRepository 
{
  private $users;	
  private $role;
  public function __construct(Role $role)
  {
     
      $this->role = $role;
  }

    public function showAllUsers()
    {   
      $users = User::paginate(5);
      return $users;   
    }
    public function create(array $data)
    {  
      $data['password']= Hash::make($data['password']);    
      return User::create($data);
    }
    public function goEdit( $id)
    {   
      return User::find($id);
    }
    public function edit($id,array $data,$RoleId)
    {  
      $data['password']= Hash::make($data['password']);
      $user = User::find($id);
      if($RoleId != 9999){
        $role = $this->role->findById($RoleId);
   
        $user->syncRoles($role);
      }else{
        $user->roles()->detach();
      }
      return $user->update($data);
    } 
    public function search($name)
    {    
      return User::where('name','like',$name. '%')->paginate(5);
    }
    public function delete($id)
    {    
      return User::find($id)->delete();
    }
}