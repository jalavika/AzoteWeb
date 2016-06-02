<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Arkalys</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="Keywords" content="">

    {!! Html::favicon('images/favicon.ico') !!}

    <!-- Fonts -->
    {!! Html::style('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600') !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') !!}

    <!-- CSS -->
    {!! Html::style('css/app.css') !!}

    <!-- Scripts -->
    {!! Html::script('https://code.jquery.com/jquery-2.2.3.min.js') !!}
    {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') !!}
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">

            <div class="navbar-header">

                <!-- Responsive -->
                <div class="hamburger">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    {!! Html::image('images/mono-logo.png', 'logo', ['style' => 'height: 32px;']) !!}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">

                <!-- Nav Left -->
                <ul class="nav navbar-nav">
                    <li><a href="">Accueil</a></li>
                    <li><a href="">Communauté</a></li>
                    <li><a href="">Assistance</a></li>
                </ul>

                <!-- Nav Right -->
                <ul class="nav navbar-nav navbar-right">

                    @if (Auth::guest())

                    <!-- Disconnected -->
                    <li><a href="{{ route('login') }}" class="navbar-link">Connexion</a></li>
                    <li><a href="{{ route('register') }}" class="navbar-link">Inscription</a></li>

                    @else

                    <!-- Connected -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownMenu1">
                            <img src="{{ Gravatar::src(Auth::user()->email, 200) }}" class="nav-profile-photo">
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li class="dropdown-header">Paramètres</li>
                            <li>
                                <a href="{{ route('profile') }}"><i class="fa fa-fw fa-btn fa-cog"></i>Mon compte</a>
                                <a href=""><i class="fa fa-fw fa-btn fa-life-ring"></i>Mes tickets</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"><i class="fa fa-fw fa-btn fa-sign-out"></i>Déconnexion</a>
                            </li>
                        </ul>
                    </li>

                    @endif

                </ul>

            </div>
        </div>

    </nav>

    <div id="breadcrumb">
        <div class="container">
            <h1>Rejoindre la communauté</h1>
            <ol class="breadcrumb">
                <li><a href="#">Accueil</a></li>
                <li class="active">Rejoindre la communauté</li>
            </ol>
        </div>
    </div>

    <!-- Content -->
    <div class="container">

        <div class="row">
            @yield('menu')
            @yield('page')
        </div>

    </div>

</body>
</html>
