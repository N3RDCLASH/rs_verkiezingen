<?php

namespace App\Http\Controllers;

use App\Models\Burgers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function login()
    {
        return view('pages.login');
    }
    
    public function postLogin(Request $request)
    {
        $this->validate(request(), [
        'id_nummer' => ['required'],
        'burger_password' => ['required']
        ]);
 
        $credentials = $request->only('id_nummer', 'burger_password');
        if (Burgers::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended ('/somewhere');
        }
    }
        
}
