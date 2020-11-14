<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Kandidaat;
use App\Models\Partij;

class KandidatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kandidaat = new Kandidaat;
        $partijen = Partij::All();
        $districten = District::All();
        $data = $kandidaat->getAllKandidaten();
        return view('pages.kandidaten')->with(['kandidaten' => $data, 'partijen' => $partijen, 'districten' => $districten]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        $data = [];
        foreach ($_POST as $key => $value) {;
            $data[$key] = htmlentities($value, ENT_QUOTES, 'UTF-8', false);
        }

        $kandidaat = new Kandidaat;
        $kandidaat->createKandidaat($data);
        return redirect()->action([KandidatenController::class, 'index']);
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
        $kandidaat = new Kandidaat;
        $kandidaat_data = $kandidaat->getOneKandidaat($id)[0];
        $partijen = Partij::All();
        $districten = Partij::All();
        // return ['kandidaat' => $kandidaat_data[0]->kandidaat_naam];
        return view('pages.kandidaat')->with(['kandidaat' => $kandidaat_data, 'partijen' => $partijen, 'districten' => $districten]);
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
        //sanitize data
        $data = [];
        foreach ($_POST as $key => $value) {
            $data[$key] = htmlentities($value, ENT_QUOTES, 'UTF-8', false);
        }

        $kandidaat = new Kandidaat;
        $kandidaat->updateKandidaat($id, $data);
        return redirect()->action([KandidatenController::class, 'show'], ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kandidaat = new Kandidaat;
        $kandidaat->deleteKandidaat($id);
        return redirect()->action([KandidatenController::class, 'index']);
    }
}
