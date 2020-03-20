<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;



class SendMails extends Mailable 
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param array $array_file
     * @param array $mail_info
     */
    
    protected $file;
    protected $mail_info;
    
    public function __construct($array_file,$mail_info)
    {
        $this->file = $array_file;
        $this->mail_info = $mail_info;
    }

    /**
     * Build the info message.
     *
     * @return SendMails
     */
    
    public function build()
    {   
        $arrayFile = $this->file;

        $this->markdown('mail.mail_content',[
            'content'=>$this->mail_info['content'],
            'images'=>  $arrayFile,
        ]);

        $this->with(['content',$this->mail_info['content']]);
            
        $this->from('tuananh191293@gmail.com','Tuấn Anh Gửi');
           
        $this->subject($this->mail_info['subject']);    
            
        if($this->mail_info['cc'] !=null)
        {
            $this->cc($this->mail_info['cc']);
        }   

        if( $this->mail_info['bcc']!=null)
        {
            $this->bcc($this->mail_info['bcc']);
        }

        /** 
        *  
        * @Date: 2020-03-12 14:21:35 
        * @Desc: attach images for send mail  
        *
        */
      
        if(count($arrayFile)>0)
        {
            foreach($arrayFile as $file)
            {
                $this ->attach(storage_path('app/public/'.$file['path']),[
                    'as' => $file['name'],
                    'mime' => $file['type'],
                ]);
            }  
        }
       
        return $this;                  
    }
   
}
