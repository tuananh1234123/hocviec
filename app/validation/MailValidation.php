<?php

namespace App\validation;

class MailValidation 
{	

	public function __construct(){
        
    }
 
   /** 
    *   validation when send mail
    *   @param Illuminate\Http\Request;
    *
    *   @method validation for input send mail
    *   @return error
    */
    
    public function validate_sendMail($request){ 
        
        /**
         * validate for form submit
         */

       if($request->cc!=null)
        {
            $request->validate([     
            'cc' =>['email', 'max:255'],  
            ]);
        }

        if($request->bcc!=null)
        {
            $request->validate([     
            'bcc' =>['email', 'max:255'],  
            ]);
        }
        $request->validate([     
            'to'=>['email', 'max:255'],   
            'content' => ['required', 'string', 'min:8'],
            'Subject' => ['required', 'string','max:255'],
        ]);
        
         /**
         * validate for file upload
         * 
         */

        $request->validate(
            [     
                'files.*'=>
                    [
                    'max:3072',
                    'mimes:xlsx,xls,csv,jpg,jpeg,png,bmp,doc,docx,pdf,tif,tiff'
                    ]
            ],
            
            [
                'files.*.max'=>'You every file may not be greater than 3 MB.',
                'files.*.mimes'=> 'Only xlsx,xls,csv,jpg,jpeg,png,bmp,doc,docx,pdf,tif,tiff images are allowed '
            ]
        );
    }
}
