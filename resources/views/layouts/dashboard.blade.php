<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
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
                        <img class='user-dropdown-circle' src="https://i.imgur.com/zsXULp7.jpg" alt="">
                        <span class="user-dropdown-text">
                            Joel Naarendorp
                            <i class="material-icons">expand_more</i>
                        </span>
                    </a>
                    <ul id='dropdown2' class='user-dropdown-content'>
                        <li><a href="profiel" id="huidige_gebruiker_naam">
                                <i class="material-icons left">person</i>Mijn Account</a></li>
                        <li><a onclick="" href="login">
                                <i class="material-icons left">exit_to_app</i>
                                Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    @include('includes.sidebar')
    <div class="main-content">
        @yield('content')
    </div>

    <script type="application/javascript" src="{{asset('js/node_modules/chart.js/dist/Chart.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('js/main.js')}}"></script>
</body>

</html>