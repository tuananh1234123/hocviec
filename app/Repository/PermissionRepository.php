<?php
namespace App\Repository;
use Spatie\Permission\Models\Permission;
class PermissionRepository 
{
    public function showAll()
    {   
    $Permission = Permission::get();
    return $Permission;   
    }
    public function create( $data)
    {   
    return  Permission::findOrCreate( $data);   
    }
    public function edit($id,array $data)
    {  
      return Permission::findById($id)->update($data);
    } 
    public function search($name)
    {    
      return Permission::where('name','like',$name. '%')->paginate(5);
    }
    public function delete($id)
    {    
      return Permission::findById($id)->delete();
    }
   
}