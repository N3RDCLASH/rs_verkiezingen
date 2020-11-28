<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'district';
    protected $primaryKey = 'district_id';
    protected $fillable = ['district_naam'];
    public $timestamps = false;

    public function createDistrict($data)
    {
        $this::create(["district_naam" => $data['district_naam']]);
    }

    public function getOneDistrict($id)
    {
        return $this::select()->where('district_id', $id)->get();
    }
    public function updateDistrict($data, $id)
    {
        return $this::where('district_id', $id)->update(['district_naam' => $data['district_naam']]);
    }
    public function deleteDistrict($id)
    {
        return $this::where('district_id', $id)->delete();
    }
}
