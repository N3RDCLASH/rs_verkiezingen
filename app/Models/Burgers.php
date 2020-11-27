<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Burgers extends Model
{
    protected $table = 'burgers';
    protected $fillable = ['id_nummer', 'burger_password', 'burger_jaardag', 'district'];
    public $timestamps = false;

    public function updateStemStatusBurger($data)
    {
        $this::where('burger_id', $data->gebruiker_id)->update(['gestemd' => $data->status]);
    }
}
