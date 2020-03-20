<?php

namespace App\Http\Controllers;

use App\Repository\UsersRepository;
use App\Services\mailServices;
use Illuminate\Http\Request;
use App\Repository\RoleRepository;
use Illuminate\Support\Facades\Redis;
use App\validation\MailValidation;
use App\Services\UserActivityServices;

class MailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param   UserActivityServices    $action
     * @param   UsersRepository         $userRep
     * @param   mailServices            $mailSer
     * @param   RoleRepository          $roles
     * @param   MailValidation          $valid
     *
    */
 
    private $mailSer;
    private $roles;
    private $groupRoles;
    private $valid;
    private $action;
    
    public function __construct(UserActivityServices $action, UsersRepository $userRep, mailServices $mailSer, RoleRepository $roles, MailValidation $valid)
    {
        $this->middleware('auth');
        $this->mailSer  =   $mailSer;
        $this->users    =   $userRep;
        $this->roles    =   $roles;
        $this->valid    =   $valid;
        $this->action   =   $action;
    }

    public function index()
    {
        if (!Redis::exists('roles')==1) 
        {
            $this->groupRoles = $this->roles->showAll();
            
            Redis::set("roles", $this->groupRoles);

            return view('mail.mail_box');
        }
        
        return view('mail.mail_box', ['groupRoles'=> $this->groupRoles]);
    }

    /**
     * @desc : 
     * 
     * @param Illuminate\Http\Request $request
     *
     */

    public function page_send_mail(Request $request)
    {
        $request->session()->put('group', $request->all());
        
        return view('mail.mail_sendMail');
    }
    
    public function go_page_send_mail()
    {
        return view('mail.mail_sendMail');
    }
    
    /**
     * @desc : do send email and 
     * check validator for request , call event save history send mail 
     * 
     * @param Illuminate\Http\Request $request
     *
     */

    public function sendMail(Request $request)
    {
        $this->valid->validate_sendMail($request);

        $this->mailSer->send_mail($request);

        $this->action->EventAction(trans('app.send_mail'), $request);
        
        return redirect('mail');
    }
}
