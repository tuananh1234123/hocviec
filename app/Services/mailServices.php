<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Repository\UsersRepository;
use App\Repository\RoleRepository;
use App\Notifications\TestNotification;
use App\Mail\SendMails;
use Mail;

class mailServices {
    
    /**  
     * @Date: 2020-03-12 14:39:07 
     * @Desc: services help support when send mail 
     * 
     * @param  UsersRepository  $user
     * @param  RoleRepository   $roles
     * 
     */
    
    private $user;
    private $roles;
    
    public function __construct(UsersRepository $user,RoleRepository $roles)
    {  
        $this->user     = $user;    
        $this->roles    = $roles;   
    }
   
    /** 
     * @Date: 2020-03-12 14:44:07 
     * @Desc: upload file up server 
     * 
     * @param Illuminate\Http\Request   $request
     * 
     * @return array
     * 
     */
    
    public function upload_file(Request $request){

        $array_file = array();

        if($request->has('files'))
        {
            foreach( $request->all()['files'] as $file)
            {  
                $fileInfo = [
                    'path'=>$file->storeAs('photos',$file->getClientOriginalName()),
                    'name'=>$file->getClientOriginalName(),
                    'type'=>$file->getMimeType(),     
                ];
                
                array_push($array_file,$fileInfo);
            }
        }
        
        return $array_file;
    }

    /**
    *   @param Illuminate\Http\Request 
    *   
    *
    *   @method send mail 
    *   @return void
    */

    public function send_mail(Request $request){ 
        
        $array_file = $this->upload_file($request);

        /** 
         * create array retrieve info of file 
         * from this function upload_file()
         * 
         */
        
        $mail_info = array(
            'subject'=>$request->Subject,
            'content'=>$request->content,
            'cc'=>$request->cc,
            'bcc'=>$request->bcc,
        );
        
        /**
         * get attribute group of user when tick group from session saved 
         * 
         */

        $tick_group = $request->session()->get('group');
     
        if(is_array($tick_group) && array_key_exists('tick',$tick_group)){

            foreach($tick_group['tick'] as $group){

                if($group == 'Anyone')
                {
                    Mail::to($request->to)->queue(new SendMails($array_file,$mail_info));

                    toastr()->success(' You has been send mail successfully!','Notify' ,['timeOut'=>3000]);
                    break;
                }
                
                if($group == 'all'){

                    $users = $this->user->get();

                    foreach($users as $user)
                    {
                        Mail::to($user->email)->queue(new SendMails($array_file,$mail_info));
                    }   
                    toastr()->success(' You has been send mail successfully!','Notify' ,['timeOut'=>3000]);
                }      
            }
            
            if(array_key_exists('roleId',$tick_group)){

                $role = $this->roles->findById($tick_group['roleId']);

                if(count($role->users)>0)
                {
                    foreach($role->users as $user)
                    {
                        Mail::to($user->email)->queue(new SendMails($array_file,$mail_info));
                    }
                    toastr()->success(' You has been send mail successfully!','Mail Notify' ,['timeOut'=>3000]);
                }
                else
                {
                    toastr()->warning($role->name .' not have users, please choice group again ','Mail Notify' ,['timeOut'=>3000]);
                }
            }
        }       
    }

    
    /**
    *   @param string
    *
    *   @method send notify 
    *   @return void
    */
    
    public function notify($email){
        
        $user = $this->user->findName_byEmail($email); 

        $data = ["name_send"=>$user[0]->name ,"content"=>"You have new mail"];
        
        $user[0]->notify(new TestNotification($data));
        
    }
   
  
}
