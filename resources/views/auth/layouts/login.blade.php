<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>USEMODA Marketplace</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">

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
        .login-left{
            background-color: #adadad;
            display: flex;
            min-height: 100vh;
        }        
        .login-right{
            float:left;
            display: flex;
            min-height: 100vh;            
        }
        .login-left-img{
            height: 33px !important;
            width: 180px !important;
            margin-top:20px;
        }
    </style>

    @yield('style')

</head>
<body id="app-layout">

    <section>
        <div class="col-lg-6 login-left"><img class="login-left-img" src="{{ URL::asset('assets/imgs/logo-usemoda.png') }}"></div>
        <div class="col-lg-6 login-right">@yield('content')</div>
    </section>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script src="{{ URL::asset('assets/jsc/jquery.backstretch.min.js') }}"></script>
    <script>
        
        $('.login-left').backstretch([
              "{{ URL::asset('assets/imgs/login/fashion01.jpg') }}"
            , "{{ URL::asset('assets/imgs/login/fashion02.jpg') }}"
            , "{{ URL::asset('assets/imgs/login/fashion03.jpg') }}"
        ], {duration: 3000, fade: 750});
           
    </script>
    
</body>
</html>
