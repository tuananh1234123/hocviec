<?php

namespace App\validation;
use Illuminate\Http\Request;

class UserValidation 
{	

	public function __construct()
	{
		
	}
 
  public function validate(Request $request)
  {
    $request->validate([
    'name' => ['required', 'string', 'max:255'],
    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
  }
  public function validateEdit(Request $request)
  {
    $request->validate([
    'name' => ['required', 'string', 'max:255'],
    'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
  }

  } 
