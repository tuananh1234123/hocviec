<?php

namespace App\Services;

use App\Repository\RoleRepository;
use App\Repository\PermissionRepository;
use App\Models\User;
use App\Repository\UsersRepository;


class Role_Permission
{	
  private $roleRep;
  private $perRep;

  public  function __construct(RoleRepository $roleRep,PermissionRepository $perRep){
    $this->roleRep  = $roleRep;
    $this->perRep = $perRep;
}
public function updatePermission($roles){
  if($roles!=null){
      foreach($roles as $key=>$value){
        $role = $this->roleRep->finByName($key);  
        $role->syncPermissions($value);       
      }
  }  else{
    dd("trong kia");
  } 
}
 
 
}