<?php 
use App\Http\Controllers\Auth\LoginController;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="row" id="login-container">
        <div class="col m6 s12 waves">
        </div>
        <div class=" col m6 s12" id="login-form-container">
            <form method="POST" id="form_user" class="" action="{{action([LoginController::class,'store'])}}"
                class="col s10 offset-s1">
                @csrf()
                <h3 id="login-form-title">Inloggen Gebruiker</h3>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons rsv-input-icon primary-text">
                            person
                        </i>
                        <input placeholder="Id nummer" id="email" class="validate rsv-input with-icon" name="id_nummer"
                            pattern="([A-Z a-z]{2})([0-9]{6})" type="text" autofocus>
                        <!-- <label for="first_name rsv-input-label">First Name</label> -->

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons rsv-input-icon primary-text">
                            lock_outline
                        </i>
                        <input placeholder="Wachtwoord" id="password" type="password"
                            class="validate rsv-input with-icon form-control @error('password') is-invalid @enderror"
                            name="burger_password" required autocomplete="current-password">
                        <!-- <label for="first_name rsv-input-label">First Name</label> -->
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <input type="hidden" name="user_role" value="user">
                <span>
                    Nog niet geregistreerd?<a href="register"> Klik hier</a>
                </span>
                <div class="row">
                    <button class="btn btn-primary waves-effect waves-light btn col s6 right login-btn" type="submit"
                        name="submit_persoonlijke_gegevens" id="submit_persoonlijke_gegevens">Log
                        In
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>

            <form method="POST" class="hide" id="form_admin" action="{{action([LoginController::class,'store'])}}"
                class="col s10 offset-s1">
                @csrf()
                <h3 id="login-form-title">Inloggen Admin</h3>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons rsv-input-icon primary-text">
                            person
                        </i>
                        <input placeholder="Gebruikersnaam" id="email" class="validate rsv-input with-icon"
                            name="gebruikers_naam" type="text" autofocus>
                        <!-- <label for="first_name rsv-input-label">First Name</label> -->
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons rsv-input-icon primary-text">
                            lock_outline
                        </i>
                        <input placeholder="Wachtwoord" id="password" type="password"
                            class="validate rsv-input with-icon form-control @error('password') is-invalid @enderror"
                            name="gebruikers_password" required autocomplete="current-password">
                        <!-- <label for="first_name rsv-input-label">First Name</label> -->
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <input type="hidden" name="user_role" value="admin">
                <span>
                    Nog niet geregistreerd?<a href="register"> Klik hier</a>
                </span>
                <div class="row">
                    <button class="btn btn-primary waves-effect waves-light btn col s6 right login-btn" type="submit"
                        name="submit_persoonlijke_gegevens" id="submit_login">Log In
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
            <div class="switch">
                <label>
                    User
                    <input type="checkbox" id="role_toggle" onclick="toggleForm()">
                    <span class="lever"></span>
                    Admin
                </label>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
</body>

</html>