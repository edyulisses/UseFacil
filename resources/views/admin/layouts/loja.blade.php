<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>USEMODA - Painel Administrativo</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100, 300,400,500,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .fa-btn {
            margin-right: 6px;
        }

        #page-content-wrapper h1{
            font-weight: 300;
        }
        .social {
            font-size: 24px;
            color: #c0c0c0;
        }
        .copy {
            font-size: 10px;
            color: #adadad;
        }        
    </style>

    @yield('style')

</head>
<body id="app-layout">
                
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    @yield('script')


    <div class="col-md-5 col-md-offset-4" style="text-align: center;">
        <p><a href="{{url('/')}}"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> USEMODA Institucional</a></p>
        <p class="social">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
            <i class="fa fa-google-plus-square" aria-hidden="true"></i>
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </p>
        <p class="copy">© 2017 - USEMODA - Todos os Direitos Reservados</p>
    </div>

</body>
</html>
