<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body>
    <div class="row" id="login-container">
        <div class="col m6 s12 waves">
        </div>
        <div class=" col m6 s12" id="register-form-container">
            <form action="" class="col s10 offset-s1" id="registratie_form">
                <h3 id="login-form-title" style="margin-bottom: 1em;">Registreren</h3>
                <div class="row">
                    <div class="col s12">
                        <div class="progress">
                            <div class="determinate green" style="width:0%">
                            </div>
                        </div>
                        <div class="progress-milestone-container ">
                            <div class="circle-container">
                                <div class="milestone personal complete"><i class="material-icons white-text">person</i>
                                </div>
                                <span class="milestone-text">Persoonlijk</span>

                            </div>
                            <div class="circle-container">
                                <div class="milestone account  ">
                                    <i class="material-icons white-text">lock</i>
                                </div>
                                <span class="milestone-text">Account</span>
                            </div>
                            <div class="circle-container">
                                <div class="milestone finished ">
                                    <i class="material-icons white-text">check</i>
                                </div>
                                <span class="milestone-text">Voltooid</span>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="form-step-container">
                    <div id="persoonlijke_informatie">
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Voornaam" name="voornaam" id="voornaam" type="text"
                                    class="validate rsv-input">
                            </div>

                            <div class="input-field col s6">
                                <input placeholder="Naam" id="naam" name="naam" type="text" class="validate rsv-input">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12" name="geslacht">
                                <select class="" name="geslacht">
                                    <option value="" disabled selected>Selecteer uw Geslacht</option>
                                    <option value="1">Man</option>
                                    <option value="2">Vrouw</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select class="" name="woonplaats" id="woonplaats">
                                    <option value="" disabled selected>Selecteer uw Woonplaats</option>
                                    <option value="1">Paramaribo</option>
                                    <option value="2">Wanica</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select class="" name="resort" id="resort">
                                    <option value="" disabled selected>Selecteer uw Resort</option>
                                    <option value="1">Paramaribo</option>
                                    <option value="2">Wanica</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="ID KaartNummer" id="id_kaart_nummer" type="text"
                                    class="validate rsv-input">
                            </div>
                            <div class="row">
                                <button class="waves-effect waves-light btn col s6 right login-btn" type="submit"
                                    name="action" id="persoonlijke_gegevens_btn">Volgende
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>


                    </div>


                    <!-- Account Information -->
                    <!-- <div class="location-information"></div> -->
                    <div id="account_informatie" class="hidden">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons rsv-input-icon primary-text">
                                    mail_outline
                                </i>
                                <input placeholder="Email" id="email" type="text" class="validate rsv-input with-icon">
                                <!-- <label for="first_name rsv-input-label">First Name</label> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons rsv-input-icon primary-text">
                                    lock_outline
                                </i>
                                <input placeholder="Wachtwoord" id="password1" type="password"
                                    class="validate rsv-input with-icon">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons rsv-input-icon primary-text">
                                    lock_outline
                                </i>
                                <input placeholder="Wachtwoord herhalen" id="password2" type="password"
                                    class="validate rsv-input with-icon">
                            </div>
                        </div>
                        <div class="row">
                            <button class="waves-effect waves-light btn col s6 right login-btn" type="submit"
                                id="account_gegevens_btn" name="action">Voltooien
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
    <script type="application/javascript" src="{{asset('/js/materialize.min.js')}}"></script>
    <script type="application/javascript" src={{asset('/js/main.js')}}></script>
    <script defer type="application/javascript" src="{{asset('/js/register.js')}}"></script>
</body>

</html>