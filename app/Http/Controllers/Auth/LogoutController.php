<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;

class LogoutController extends Controller
{
    //
    public function store()
    {
        auth()->logout();
        return redirect()->action([LoginController::class, 'index']);
    }
}
