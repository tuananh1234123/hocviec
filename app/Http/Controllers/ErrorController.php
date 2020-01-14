<?php

namespace App\Http\Controllers;


class ErrorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    public function __construct()
    {  
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $error= trans('app.perrmission');
        return view('Error.Error',['error'=>$error]);
    }
}
