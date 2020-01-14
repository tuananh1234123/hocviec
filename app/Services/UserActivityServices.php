<?php 
    namespace App\Services;
    use App\Repository\UserActivityRepository;
    use Illuminate\Http\Request;
    use Auth;
    class UserActivityServices{
    private $UserActivity;
    public function __construct()
    {  
        date_default_timezone_set("Asia/Bangkok");
        
    }

    /**
     * Handle the event.
     *
     * @param  UserAction  $event
     * @return void
     */
    public function handle()
    {
        
    }
    public function EventAction($description,$request)
    {   $this->UserActivity= new UserActivityRepository();
        $user = Auth::user()->name;
        $description = "$user $description ";
        $this->UserActivity->create([
            'description' =>$description,
            'users_id' => Auth::user()->id,
            'ip_address' => $request->ip(),
            'user_agent' => $this->getUserAgent($request)
        ]);

    }

    /**
     * Get user agent from request headers.
     *
     * @return string
     */
    private function getUserAgent(Request $request)
    {   
        return substr((string) $request->header('User-Agent'), 0, 500);
    }
    }