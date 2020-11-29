<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Burgers;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\http\Request;

class RegisterController extends Controller
{
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
      $id_nummer = request()->id_nummer,
      $burger_jaardag = request()->burger_jaardag,
      $district = request()->district,
      $burger_password = Hash::make(request()->burger_password)
    ]);

    
    // DB::table('burgers')->insert(
    //   ['id_nummer'=>  $id_nummer, 
    //   'burger_password'=>  $burger_password, 
    //   'burger_jaardag' => $burger_jaardag,
    //   'district'=> $district]
    //  );
    return redirect()->to('/home');
    
    
  }
}
