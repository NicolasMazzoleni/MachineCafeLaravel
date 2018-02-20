<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link rel=' icon' type='image/x-icon' href='/favicon.ico'/>


    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        nav {
            margin-bottom: 100px;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .table {
            text-align: center;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    {{-- <a class="navbar-brand" href="#">Navbar</a>--}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Commander <span class="sr-only">(current)</span></a>
            </li>
            @if (auth::user())
                @if (Gate::allows('admins'))
                    <li class="nav-item">
                        <a class="nav-link" href="/boisson">Boissons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ingredients">Ingrédients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/recette">Recette</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/monnayeur">Monnayeur</a>
                    </li>
                    <li class="nav-item">
                        @endif
                        <a class="nav-link disabled" href="/vente">Vente</a>
                    </li>
                @if(Gate::allows('showSuperAdminPage'))
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/admin">Admin</a>
                    </li>
                @endif
        </ul>
        @endif
    </div>
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest

            <li><a href="{{ route('login') }}">Login </a></li>
            <li><a href="{{ route('register') }}"> Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                   aria-haspopup="true">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
    </ul>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</nav>


<div class="flex-center position-ref">

    <div class="content">
        <div class="title m-b-md">
            @yield('name')
            @yield('button')
            @yield('machineCoffee')
        </div>
        @yield('table')
        @yield('formulaire')
    </div>
</div>
</body>
</html>
