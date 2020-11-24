<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gebruikers extends Model
{
    use HasFactory;

    protected $table = "gebruikers";
    protected $primaryKey = "gebruikers_id";
    protected $fillable = ['gebruikers_naams'];
    protected $hidden = ['gebruikers_password'];
    public $timestamps = false;


    public function updateStemStatusGebruiker($data)
    {
        $this::where('gebruiker_id', $data->id)->update(['gestemd', $data->status]);
    }
}
