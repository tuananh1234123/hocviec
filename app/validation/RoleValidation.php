<?php

namespace App\validation;
use Illuminate\Http\Request;

class RoleValidation 
{	

	public function __construct()
	{
		
	}
 
  public function validate(Request $request)
  {
    $request->validate([
      'name' => ['required', 'string', 'max:255','unique:roles'],
      ]);
    }
  }


  