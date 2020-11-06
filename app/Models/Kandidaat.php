<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidaat extends Model
{
    // use HasFactory;
    protected $table = "kandidaten";
    protected $primaryKey = 'kandidaat_id';
    protected $fillable = ['kandidaat_naam', 'partij', 'district'];

    public function getAllKandidaten()
    {
        $data = $this::addSelect([
            'partij' => Partij::select('partij_naam')
                ->whereColumn('partij_id', 'kandidaten.partij')
                ->limit(1),
            'district' => District::select('district_naam')
                ->whereColumn('district_id', 'kandidaten.district')
                ->limit(1)
        ])->get();
        return $data;
    }

    public function getOneKandidaat($id)
    {
        $data = $this::addSelect([
            // 'partij' => Partij::select('partij_naam')
            //     ->whereColumn('partij_id', 'kandidaten.partij')
            //     ->limit(1),
            // 'district' => District::select('district_naam')
            //     ->whereColumn('district_id', 'kandidaten.district')
            //     ->limit(1)
        ])->where('kandidaat_id', $id)->limit(1)->get();
        return $data;
    }
}
