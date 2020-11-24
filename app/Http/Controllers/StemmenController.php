<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gebruikers;
use App\Models\Kandidaat;
use App\Models\Partij;
use PhpParser\Node\Stmt\Return_;

class StemmenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = (object)[
            "gebruikers_id" => 1,
            "rol" => "user",
            "gebruikers_naam" => "Viroja Kartodikromo",
            "district" => 1,
            "gestemd" => 0
        ];
        $kandidaten = new Kandidaat;
        if ($user->gestemd == 0)
            return view('pages.stemmen')->with(['kandidaat' => $kandidaten->getKandidaatByDistrict($user->district)]);
        if ($user->gestemd == 1)
            return view('pages.stemmen');
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
        return var_dump($request);
        // $gebruiker = new Gebruikers();
        // $partij = new Partij();
        // $kandidaat = new Kandidaat();
        // $gebruiker->updateStemStatusGebruiker(['kandidaat_id' => $_POST['kandidaat_id'], 'user_id' => $_POST['user_id']]);
        // $kandidaat->updateStemAmountKandidaat($_POST['gebruiker_id']);
        // $partij->updateStemAmountPartij($kandidaat->getOneKandidaat($_POST['kandidaat_id'])->partij);
        // return redirect(['pages.stemmen']);
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
