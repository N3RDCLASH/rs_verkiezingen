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
        <div class="col m6 s12 waves" >

        </div>
        <div class=" col m6 s12" id="login-form-container">
            <form action="" class="col s10 offset-s1">
                <h3 id="login-form-title">Inloggen</h3>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons rsv-input-icon primary-text">
                            mail_outline
                        </i>
                        <input placeholder="Email" i d="email" type="email" class= "validate rsv-input with-icon @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>  
                        <!-- <label for="first_name rsv-input-label">First Name</label> -->
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons rsv-input-icon primary-text">
                            lock_outline
                        </i>
                        <input placeholder="Wachtwoord" id="password" type="password" class="validate rsv-input with-icon form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <!-- <label for="first_name rsv-input-label">First Name</label> -->
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
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
        </div>
    </div>
   
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
</body>

</html>

