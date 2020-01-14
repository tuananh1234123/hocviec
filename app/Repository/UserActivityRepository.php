<?php
namespace App\Repository;
use App\Models\UserAction;
class UserActivityRepository 
{
    public function showAll()
    {   
      $users = UserAction::orderBy('id', 'DESC')->paginate(10);
      return $users;   
    }
    public function create( $data)
    {   
    return UserAction::create($data);
      
    }
   
   
}