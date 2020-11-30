<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Gebruikers extends Authenticatable
{
    use HasFactory;

    protected $table = "gebruikers";
    protected $primaryKey = "gebruikers_id";
    protected $fillable = ['gebruikers_naam'];
    protected $hidden = ['gebruikers_password'];
    public $timestamps = false;



    public function getAuthPassword()
    {
        return $this->gebruikers_password;
    }
    public function getAuthIdentifierName()
    {
        return "gebruikers_id";
    }
}
