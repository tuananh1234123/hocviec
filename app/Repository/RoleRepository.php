<?php
namespace App\Repository;
use Spatie\Permission\Models\Role;
class RoleRepository 
{
    public function showAll()
    {   
    $role = Role::get();
    return $role;   
    }
    public function create( $data)
    {   
    return  Role::findOrCreate( $data);   
    }
    public function edit($id,array $data)
    {  
      return Role::findById($id)->update($data);
    } 
    public function search($name)
    {    
      return Role::where('name','like',$name. '%')->paginate(5);
    }
    public function findById($id)
    {    
      return Role::findById($id);
    }
    public function delete($id)
    {    
      return Role::findById($id)->delete();
    }
    public function finByName($name)
    {    
      return Role::findByName($name);
    }
   
}