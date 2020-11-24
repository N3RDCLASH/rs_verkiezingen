<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partij extends Model
{
    protected $table = 'partij';
    protected $primaryKey = "partij_id";

    // public function getPartijByDistrict($district_id)
    // {
    //     $this->select('partij_naam','aantal_stemmen')->where()
    // }

    public function updateStemAmountPartij($id)
    {
        $this::where('partij_id', $id)->increment(['aantal_stemmen', 1]);
    }
}
