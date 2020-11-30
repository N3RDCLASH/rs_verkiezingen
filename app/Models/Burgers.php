<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Burgers extends Authenticatable
{
    protected $table = 'burgers';
    protected $primarykey = 'burger_id';
    protected $fillable = ['id_nummer', 'burger_password', 'burger_jaardag', 'district'];
    public $timestamps = false;

    public function updateStemStatusBurger($data)
    {
        $this::where('burger_id', $data->burger_id)->update(['gestemd' => $data->status]);
    }

    public function getAuthPassword()
    {
        return $this->burger_password;
    }
    public function getAuthIdentifierName()
    {
        return "burger_id";
    }
}
