<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;

class DistrictenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districten = new District();
        return view('pages.districten')->with(['districten' => District::All()]);
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
        $district = new District();
        $district->createDistrict($data);
        return redirect()->action([DistrictenController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $district = new District();
        return view('pages.district')->with(['district' => $district->getOneDistrict($id)[0]]);
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

        $district = new District();
        $district->updateDistrict($data, $id);
        return redirect()->action([DistrictenController::class, 'show'], $id);
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
        $district = new District();
        $district->deleteDistrict($id);
        return redirect()->action([DistrictenController::class, 'index']);
    }
}
