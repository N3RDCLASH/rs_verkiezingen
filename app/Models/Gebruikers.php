<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Support\Facades\Hash;

class Gebruikers extends Authenticatable
{
    use HasFactory;

    protected $table = "gebruikers";
    protected $primaryKey = "gebruikers_id";
    protected $fillable = ['gebruikers_naam', 'rol'];
    protected $hidden = ['gebruikers_password'];
    public $timestamps = false;


    public function getOneGebruiker($id)
    {
        return $this::where('gebruikers_id', $id)->limit(1)->get();
    }

    public function updateGebruiker($id, $data)
    {
        $this::where('gebruikers_id', $id)->update(
            [
                'gebruikers_naam' => $data['gebruikers_naam'],
                'rol' => $data['rol'],
                'gebruikers_password' => Hash::make($data['gebruikers_password'])
            ]
        );
    }
    public function createGebruiker($data)
    {
        $this::create(
            [
                'gebruikers_naam' => $data['gebruikers_naam'],
                'rol' => $data['rol'],
                'gebruikers_password' => Hash::make($data['gebruikers_password'])
            ]
        );
    }

    public function getAuthPassword()
    {
        return $this->gebruikers_password;
    }
    public function getAuthIdentifierName()
    {
        return "gebruikers_id";
    }
}
