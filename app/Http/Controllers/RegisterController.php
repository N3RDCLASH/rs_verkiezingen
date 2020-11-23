<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Burgers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\http\Request;

class RegisterController extends Controller
{
    public function showRegisterForm(){
     return view ('pages.register');

    }

    
  public function register()
    {
          $this->validate(request(), [
              'id_nummer' => ['required'],
                'burger_jaardag' => ['date','required'],
                'district' => ['required'],
                'burger_password' => ['required']   
          ]);

        
          Burgers::create(request([
            'id_nummer','burger_jaardag','district', 'burger_password' 
        ]));
        return redirect()->to('/home');}

        
    
  }

