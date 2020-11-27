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
    public $timestamps = false;

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
        return $this::where('kandidaat_id', $id)->limit(1)->get();
    }
    public function getKandidaatByDistrict($district_id)
    {
        return $this::addSelect(['partij' => Partij::select('partij_naam')
            ->whereColumn('partij_id', 'kandidaten.partij')
            ->limit(1)])->where('district', $district_id)->get();
    }
    public function updateKandidaat($id, $data)
    {
        $this::where('kandidaat_id', $id)->update(
            [
                'kandidaat_naam' => $data['voornaam'] . ' ' . $data['naam'],
                'partij' => $data['partij'],
                'district' => $data['district']
            ]
        );
    }

    public function updateStemAmountKandidaat($id)
    {
        $this::where('kandidaat_id', $id)->increment('aantal_stemmen');
    }
    public function createKandidaat($data)
    {
        $this::create(
            [
                'kandidaat_naam' => $data['voornaam'] . ' ' . $data['naam'],
                'partij' => $data['partij'],
                'district' => $data['district']
            ]
        );
    }
    public function deleteKandidaat($id)
    {
        $this::where('kandidaat_id', $id)->delete();
    }
}
