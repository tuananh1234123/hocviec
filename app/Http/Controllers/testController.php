<?php

namespace App\Http\Controllers;
use  App\Repository\UsersRepository;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;

class testController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $user;
    public function __construct(UsersRepository $user)
    {   
        $this->user = $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function views(){  
        return view('testAjax.test');   
    }
    
    public function ajax(){
        $user = Cache::get('cache'); 
        return $user;
    }
    
    public function api(){        
        try{
            if(Cache::has('cache')){
                $user = Cache::get('cache'); 
                return response()->json($user,Response::HTTP_OK);
            }
            $cache = Cache::remember('cache',60,function(){
                $user= $this->user->showAllUsers();
                return $user;
            }); 
            return response()->json($cache,Response::HTTP_OK);  
        }catch(\Exception $e){
            return $this->error($e->getMessage());
        }                
    }
    
    public function getData(){
        // láy dữ liệu 
        // $data = file_get_contents('http://my.campaign.fptplay.net/api');
        $data = file_get_contents('https://vnexpress.net/rss/y-kien.rss');
        // convert json -> array
        // $collection = collect(json_decode($data, true));
        $fileContents = str_replace(array("\n", "\r", "\t"), '', $data);
        $fileContents = trim(str_replace('"', "'", $fileContents));
        $simpleXml = simplexml_load_string($fileContents);
        // -
        $array = array($simpleXml);
        dd($array[0]->channel->item[3]);

        // dd( $collection['channel']['item']);   
        // dd( $collection);
        // $data1 = $collection['data'];  
        // dd($data1);
    }
    
}