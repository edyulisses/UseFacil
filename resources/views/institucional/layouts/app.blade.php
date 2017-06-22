<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>USEMODA Marketplace</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="icon" href="{{ URL::asset('assets/imgs/favicon-16.png') }}"  sizes="16x16"/>
    <link rel="icon" href="{{ URL::asset('assets/imgs/favicon-32.png') }}"  sizes="32x32"/>
    <link rel="icon" href="{{ URL::asset('assets/imgs/favicon-48.png') }}"  sizes="48x48"/>
    <link rel="icon" href="{{ URL::asset('assets/imgs/favicon-64.png') }}"  sizes="64x64"/>
    <link rel="icon" href="{{ URL::asset('assets/imgs/favicon-128.png') }}" sizes="128x128"/>

    <style>
        body {
           font-family: 'Roboto', sans-serif;
        }
        .fa-btn {
            margin-right: 6px;
        }
        .navbar-brand {
            padding: 11px 15px;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            background-color: rgba(0, 0, 0, 0.3);
            text-align: center;
            color: #fff !important;
            font-size: 10px;
        }
        .footer .social{
            font-size: 20px;
            margin: 0 0 5px;
        }       
    </style>

    @yield('style')
    
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a  href="{{ url('/') }}"><img class="navbar-brand" src="{{ URL::asset('assets/imgs/logo-usemoda-admin.png') }}"></a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar 
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/admin') }}">Admin</a></li>
                </ul>
                -->

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <!--
                        <li><a href="{{ url('/login') }}">Acesso</a></li>
                        <li><a href="{{ url('/register') }}">Registrar</a></li>
                        -->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/admin') }}">Administrativo</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
      <div class="container">

        <p class="social">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
            <i class="fa fa-google-plus-square" aria-hidden="true"></i>
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </p>

        <p>&copy 2017 - USEMODA - Todos os Direitos Reservados.</p>
      </div>
    </footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    @yield('script')
</body>
</html>
