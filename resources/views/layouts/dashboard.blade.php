<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{'Verkiezingen | '. UCfirst(explode('/',$_SERVER['REQUEST_URI'])[1]) }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/hamburger.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    @yield('head')
</head>

<body>
    <nav> <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li>
                    <a class=' ' href='#' data-target='dropdown1' href="#">
                        <i class="material-icons black-text">notifications</i>
                    </a>

                </li>
                <li>
                    <a href="#" class="user-dropdown">
                        <img class='user-dropdown-circle' src="{{asset('assets/placeholder-user.png')}}" alt="">
                        <span class="user-dropdown-text">
              <?php
                                                    //  dd(auth()->user());
                                                                                 if (auth('web')->user()){
                                                            echo strtoupper(auth()->user()->id_nummer);
                                                                                  
                                                        }else if(auth('admin')->user()){
                                                            echo UCFirst(auth('admin')->user()->gebruikers_naam);
                                                        }
                                                                                 ?>
                            <i class="material-icons">expand_more</i>
                        </span>
                    </a>
                    <ul id='dropdown2' class='user-dropdown-content'>
                        <li><a href="profiel" id="huidige_gebruiker_naam">
                                <i class="material-icons left">person</i>Mijn Account</a></li>
                        <li><a onclick="" href="/logout">
                                <i class="material-icons left">exit_to_app</i>
                                Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    @include('includes.sidebar')
    <div class="main-content">
        <div class="row">

            <div class="col s12">

                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="application/javascript" src="{{asset('js/node_modules/chart.js/dist/Chart.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('js/main.js')}}"></script>
</body>

</html>