<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use App\Models\Kandidaat;
use App\Models\Partij;
use App\Models\District;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('user');
        $this->middleware('auth:admin')->only('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Auth::guard('admin')->user());
        if (Auth::user() !== NULL || Auth::guard('admin')->user())
            return Auth::guard('admin')->user()->gebruikers_id ? $this->admin() : $this->user();
        else {
            return redirect()->action([LoginController::class, 'index']);
        }
    }
    public function user()
    {
        $kandidaten = new Kandidaat;
        $partijen = Partij::all();
        $districten = District::all();
        return view('pages.home')->with(['kandidaten' => $kandidaten->getAllKandidaten(), 'districten' => $districten]);
    }
    public function admin()
    {
        $kandidaten = new Kandidaat;
        $partijen = Partij::all();
        $districten = District::all();
        return view('pages.home')->with(['kandidaten' => $kandidaten->getAllKandidaten(), 'districten' => $districten]);
    }
}
