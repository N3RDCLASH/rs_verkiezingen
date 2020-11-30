<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidaat;
use App\Models\Partij;
use App\Models\District;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {

        $kandidaten = new Kandidaat;
        $partijen = Partij::all();
        $districten = District::all();
        return view('pages.home')->with(['kandidaten' => $kandidaten->getAllKandidaten(), 'districten' => $districten]);
    }

    public function kandidaten()
    {
        return view('pages.kandidaten');
    }
    public function partijen()
    {
        return view('pages.partijen')->with(['partijen' => Partij::all()]);
    }
    public function districten()
    {
        return view('pages.districten');
    }
}
