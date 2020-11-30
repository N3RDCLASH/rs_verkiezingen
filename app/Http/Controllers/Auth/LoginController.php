<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\Gebruikers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (request()->user_role == "user") {
            if (!Auth()->attempt([
                "id_nummer" => request()->id_nummer,
                "password" => request()->burger_password
            ])) {
                echo "fail 1";
                back()->with('status', "Invalid Login Details");
            } else {
                echo "pass";
                return redirect()->action([HomeController::class, 'home']);
            }
        }

        if (request()->user_role == "admin") {
            if (!Auth::guard('admin')->attempt([
                "gebruikers_naam" => $request->gebruikers_naam,
                "password" => $request->gebruikers_password
            ])) {
                echo "fail";
                back()->with('status', "Invalid Login Details");
            } else {
                echo "pass";
                return redirect()->action([HomeController::class, 'index']);
            }
        }
    }

    //

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //c
    }
}
