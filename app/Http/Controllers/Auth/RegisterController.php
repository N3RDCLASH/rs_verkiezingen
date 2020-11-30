<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Burgers;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\http\Request;

class RegisterController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest');
  }
  public function showRegisterForm()
  {
    return view('pages.register');
  }


  public function register()
  {
    $this->validate(request(), [
      'id_nummer' => ['required'],
      'burger_jaardag' => ['date', 'required'],
      'district' => ['required'],
      'burger_password' => ['required']
    ]);


    Burgers::create([
      "id_nummer" => request()->id_nummer,
      "burger_jaardag" => request()->burger_jaardag,
      "district" => request()->district,
      "burger_password" => Hash::make(request()->burger_password)
    ]);

    if (auth()->attempt([
      "id_nummer" => request()->id_nummer,
      "password" => request()->burger_password
    ])) {
      return redirect()->to('/home');
    } else {
    }
  }
}
