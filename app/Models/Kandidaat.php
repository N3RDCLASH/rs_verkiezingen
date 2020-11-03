<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidaat extends Model
{
    // use HasFactory;
    protected $table = "kandidaten";
    protected $primaryKey = 'kandidaat_id';
    protected $fillable = ['kandidaat_naam','partij','district'];


}
