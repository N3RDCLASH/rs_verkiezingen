<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Gebruikers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\http\Request;

class RegisterController extends Controller
{
    public function showRegisterForm(){
     return view ('pages.register');

    }

    public function register(){
      var_dump($_POST);
     
       }

      //  public function validation(array $data)
      //    {
      //        return Validator::make($data, [
      //            'voornaam' => ['required', 'string', 'max:255'],
      //           'naam' => ['required', 'string', 'max:255'],
      //           'woonplaats' => ['required', 'string', 'max:255'],
      //            'id_kaart_nummer' => ['required', 'string', 'max:255'],
      //           'password1' => ['required', 'string', 'min:8', 'confirmed'],
                
      //       ]);
      //  }
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    /**
     * Where to redirect users after registration.
     *
     * @var string
     
    *protected $redirectTo = RouteServiceProvider::HOME;

    
     * Create a new controller instance.
     *
     * @return void
     
   * public function __construct()
    *{
       * $this->middleware('guest');
    *}
*/
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     
   * protected function validator(array $data)
   * {
       * return Validator::make($data, [
           * 'voornaam' => ['required', 'string', 'max:255'],
          *  'naam' => ['required', 'string', 'max:255'],
          *  'woonplaats' => ['required', 'string', 'max:255'],
            *'id_kaart_nummer' => ['required', 'string', 'max:255'],
          *  'password1' => ['required', 'string', 'min:8', 'confirmed'],
           
       * ]);
   * }
*/
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Gebruikers
    
  *  protected function create(array $data)
    *{
      *  return Gebruikers::create([
        
        *    'email' => $data['gebruikers_naam'],
        *    'password1' => Hash::make($data['gebruikers_password'])
      *  ]);
    *}
     */
}
