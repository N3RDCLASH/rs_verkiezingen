<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partij;

class PartijenController extends Controller
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
        return view('pages.partijen')->with(['partijen' => Partij::all()]);
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
        foreach ($_POST as $key => $value) {;
            $data[$key] = htmlentities($value, ENT_QUOTES, 'UTF-8', false);
        }

        $partij = new Partij;
        $partij->createPartij($data);
        return redirect()->action([PartijenController::class, 'index']);
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
        return view('pages.partij')->with('partij', Partij::find($id));
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
        foreach ($_POST as $key => $value) {;
            $data[$key] = htmlentities($value, ENT_QUOTES, 'UTF-8', false);
        }

        $partij = new Partij;
        $partij->updatePartij($data, $id);
        return redirect()->action([PartijenController::class, 'show'], $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partij = new Partij;
        $partij->deletePartij($id);
        return redirect()->action([PartijenController::class, 'index']);
    }
}
