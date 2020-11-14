<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidaat;
use App\Models\Partij;

class StatistiekenController extends Controller
{
    //
    public function getStemmenKandidaatPerDistrict($district_id)
    {
        $kandidaat = new Kandidaat;
        return json_encode($kandidaat->getKandidaatByDistrict($district_id));
    }
    // public function getStemmenPartijPerDistrict($district_id)
    // {
    //     $partij = new Partij;
    //     return json_encode($partij->getPartijByDistrict($district_id));
    // }
}
