<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Burgers;
use App\Models\Kandidaat;
use App\Models\Partij;
use PhpParser\Node\Stmt\Return_;

class StemmenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = auth()->user();
        $kandidaten = new Kandidaat;
        if ($user->gestemd == 0)
            return view('pages.stemmen')->with(['kandidaat' => $kandidaten->getKandidaatByDistrict($user->district), 'user' => $user]);
        if ($user->gestemd == 1)
            return view('pages.gestemd');
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
        //
    }

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
        $burger = new Burgers();
        $partij = new Partij();
        $kandidaat = new Kandidaat();
        $burger->updateStemStatusBurger((object)['kandidaat_id' => $id, 'gebruiker_id' => $_POST['gebruiker_id'], 'status' => 1]);
        $kandidaat->updateStemAmountKandidaat($id);
        $partij->updateStemAmountPartij($kandidaat->getOneKandidaat($id)[0]->partij);
        return redirect()->action([StemmenController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
