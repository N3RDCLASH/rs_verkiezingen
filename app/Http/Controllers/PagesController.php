<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidaat;

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
        $kandidaten = new Kandidaat;
        return view('pages.home')->with(['kandidaten' => $kandidaten->getAllKandidaten()]);
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
