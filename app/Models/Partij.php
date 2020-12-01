<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partij extends Model
{
    protected $table = 'partij';
    protected $primaryKey = "partij_id";
    protected $fillable = ["partij_naam", "partij_afkorting"];
    public $timestamps = false;


    public function getPartijStemmenTotaal()
    {
        return $this->select('partij_naam', 'aantal_stemmen')->get();
    }
    public function createPartij($data)
    {
        $this::create(["partij_naam" => $data["partij_naam"], "partij_afkorting" => $data["partij_afkorting"]]);
    }
    public function updatePartij($data, $id)
    {
        $this::where(["partij_id" => $id])->update(["partij_naam" => $data["partij_naam"], "partij_afkorting" => $data["partij_afkorting"]]);
    }

    public function updateStemAmountPartij($id)
    {
        $this::where('partij_id', $id)->increment('aantal_stemmen');
    }

    public function deletePartij($id)
    {
        $this::where('partij_id', $id)->delete();
    }
}
