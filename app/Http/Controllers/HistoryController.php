<?php

namespace App\Http\Controllers;
use App\Repository\UserActivityRepository;



class HistoryController extends Controller
{   
    private $action;
    public function __construct(UserActivityRepository $action)
    {
      $this ->action = $action;
     }
    public function views()
    {  
        $userAction = $this->action->showAll();
        return view('HistoryAction.historyAction',['action' =>$userAction]);
    }
}