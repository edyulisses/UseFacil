<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>USEMODA - Painel Administrativo</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ URL::asset('assets/css/simple-sidebar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/admin.css') }}">

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
    </style>

    @yield('style')

</head>
<body id="app-layout">

    <nav class="navbar navbar-inverse navbar-fixed-top" style="position:fixed;">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="javascript:void(0);" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>

                <!-- Branding Image -->
                <img class="navbar-brand" src="{{ URL::asset('assets/imgs/logo-usemoda-admin.png') }}">
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar 
                <ul class="nav navbar-nav">
                    <li><a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a></li>
                </ul>
                -->

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Acesso</a></li>
                        <li><a href="{{ url('/register') }}">Registrar</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/admin/perfil') }}"><i class="fa fa-user" aria-hidden="true"></i> Perfil do Usuário</a></li>
                                <li><a href="{{ url('/') }}"><i class="fa fa-globe" aria-hidden="true"></i> Institucional</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-nav-border"><a href="{{ url('/home') }}" id="painel"><i class="fa fa-tachometer" aria-hidden="true"></i> Painel</a></li>
                <li class="sidebar-nav-border"><a href="#" class="tree-toggler" id="loja"><img src="{{ URL::asset('assets/imgs/icon-loja.svg') }}" class="sidebar-nav-icon-svg"> Loja <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                    <ul class="tree">
                        <li class="sidebar-nav-border-inner"><a href="{{ url('/loja/produtos') }}" id="loja-produtos"><i class="fa fa-cubes" aria-hidden="true"></i> Produtos</a></li>
                        <li class="sidebar-nav-border-inner"><a href="{{ url('/loja/design-da-loja') }}" id="loja-design-da-loja"><i class="fa fa-paint-brush" aria-hidden="true"></i> Design da Loja</a></li>
                        <!--
                        <li class="sidebar-nav-border-inner"><a href="{{ url('/loja/banners') }}" id="loja-banners"><i class="fa fa-picture-o" aria-hidden="true"></i> Banners</a></li>
                        -->
                        
                        <!--
                        <li class="sidebar-nav-border-inner"><a href="{{ url('/loja/seo-google') }}" id="loja-seo-google"><i class="fa fa-pie-chart" aria-hidden="true"></i> SEO Google</a></li>
                        -->
                        <li class="sidebar-nav-border-inner"><a href="{{ url('/loja/configuracoes') }}" id="loja-configuracoes"><i class="fa fa-cogs" aria-hidden="true"></i> Configurações</a></li>
                        <li><a href="{{ url('/loja/usuarios') }}" id="loja-usuarios"><i class="fa fa-user-plus" aria-hidden="true"></i> Usuários</a></li>
                        <li><a href="{{ url('/loja/usuarios') }}" id="loja-auditoria"><i class="fa fa-user-plus" aria-hidden="true"></i> Auditoria</a></li>
                    </ul>
                </li>
                <li class="sidebar-nav-border"><a href="#" class="tree-toggler" id="vendas"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Vendas <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                    <ul class="tree">
                        <li class="sidebar-nav-border-inner"><a href="{{ url('/vendas/pedidos') }}" id="vendas-pedidos"><i class="fa fa-check-square" aria-hidden="true"></i> Pedidos</a></li>
                        <li class="sidebar-nav-border-inner"><a href="{{ url('/vendas/clientes') }}" id="vendas-clientes"><i class="fa fa-users" aria-hidden="true"></i> Clientes</a></li>
                        <li><a href="{{ url('/vendas/depoimentos') }}" id="vendas-depoimentos"><i class="fa fa-commenting" aria-hidden="true"></i> Depoimentos</a></li>
                    </ul>
                </li>
                <li class="sidebar-nav-border"><a href="#" class="tree-toggler" id="vendas"><i class="fa fa-bullhorn" aria-hidden="true"></i> Marketing <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                    <ul class="tree">
                        <li class="sidebar-nav-border-inner"><a href="{{ url('/vendas/pedidos') }}" id="vendas-pedidos"><i class="fa fa-check-square" aria-hidden="true"></i> SEO Google</a></li>
                        <li class="sidebar-nav-border-inner"><a href="{{ url('/vendas/clientes') }}" id="vendas-clientes"><i class="fa fa-users" aria-hidden="true"></i> Redes Sociais</a></li>
                        <li class="sidebar-nav-border-inner"><a href="{{ url('/loja/cupons') }}" id="loja-cupons"><i class="fa fa-tags" aria-hidden="true"></i> Cupons</a></li>
                        <li><a href="{{ url('/vendas/depoimentos') }}" id="vendas-depoimentos"><i class="fa fa-commenting" aria-hidden="true"></i> Depoimentos</a></li>
                    </ul>
                </li>
                <li class="sidebar-nav-border"><a href="{{ url('/financeiro') }}" id="financeiro"><i class="fa fa-money" aria-hidden="true"></i> Financeiro</a></li>
                <li class="sidebar-nav-border"><a href="{{ url('/relatorios') }}" id="relatorios"><i class="fa fa-file-text-o" aria-hidden="true"></i> Relatórios</a></li>           
                <li class="sidebar-nav-border"><a href="{{ url('/analitycs') }}" id="analitycs"><i class="fa fa-line-chart" aria-hidden="true"></i> Analitycs</a></li> 
                <li class="sidebar-nav-border"><a href="{{ url('/aplicativos-servicos') }}" id="aplicativos-servicos"><i class="fa fa-rocket" aria-hidden="true"></i> Aplicativos & Serviços</a></li>
                <li class="sidebar-nav-border"><a href="{{ url('/relatar-melhorias') }}" id="relatar-melhorias"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Relatar Melhorias</a></li>   
            </ul>
            <div class="sidebar-footer">&copy <?php echo date('Y'); ?> USEMODA - V0.1</div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                
                @yield('content')

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('assets/jsc/jquery.cookie.js') }}"></script>
    <script src="{{ URL::asset('assets/jsc/moment.min.js') }}"></script>

    <!-- Menu Toggle Script -->
    <script>
        $(document).ready(function () {

            /* MENU LEFT */
            if($.cookie('menu_toggle')=='toggled'){
                $("#wrapper").toggleClass("toggled");
                $.cookie('menu_toggle', 'toggled');
            }else{
                $(".sidebar-footer").hide();
            };

            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
                if($.cookie('menu_toggle')=='toggled'){
                    $.cookie('menu_toggle', '');
                    $(".sidebar-footer").hide(150);
                }else{
                    $.cookie('menu_toggle', 'toggled');
                    $(".sidebar-footer").show(150);
                };                
            });

            $('.tree-toggler').parent().children('ul.tree').toggle(0);

            $('.tree-toggler').click(function () {
                $(this).parent().children('ul.tree').toggle(150);
            });


        });    



    </script>
    
    @yield('script')

</body>
</html>
