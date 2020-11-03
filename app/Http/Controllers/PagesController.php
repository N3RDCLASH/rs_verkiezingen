<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }
    public function home()
    {
        return view('pages.home');
    }
    public function kandidaten()
    {
        return view('pages.kandidaten');
    }
    public function partijen()
    {
        return view('pages.partijen');
    }
    public function districten()
    {
        return view('pages.districten');
    }
    public function stemmen()
    {
        return view('pages.stemmen');
    }
}
