@extends('admin.layouts.loja')

@section('style')
<style>
    .register{
        margin-top:30px;
    }
    .register .form-header{
        text-align: center;
        margin-bottom:30px;
    }
    .register .form-header h1{
        font-weight: 100;
        text-align: center;
    }
    .register .form-header h2{
        font-weight: 300;
        text-align: center;
    }
    .register .well{
        min-height: 400px;
    }
    .register .setup-content h1{
        font-weight: 100;
        text-align: center;        
    }
    .register .setup-content h3{
        font-weight: 300;
        text-align: center;   
    }
    .register .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 0px;
        -webkit-box-shadow: 0px;
        box-shadow: 0px;
        -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
    .register .thumbnail {
        border-radius: 0px;
    }
    .register .nav-pills>li>a {
        border-radius: 0px;
    }
    .register .well {
        border-radius: 0px;
    }
    .register .btn-group-lg>.btn, .btn-lg {
        border-radius: 0px;
    }
    .register .nomeloja{
        margin-top:30px;
        margin-bottom:30px;
    }
    .register #loading{
        margin-bottom:30px;
    }
    .register .tab-content {
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        background-color: #fff;
        padding: 20px;
        margin-bottom: 30px;
    }
    .register .alert-warning-loja {
        margin-top: 30px;
        font-size: 13px;
    }
    .register .nav-tabs.nav-justified>.active>a, 
    .register .nav-tabs.nav-justified>.active>a:focus, 
    .register .nav-tabs.nav-justified>.active>a:hover {
        border-top: 3px solid orange;
    }
</style>
@endsection

@section('content')

<div class="container register">
    <div class="form-header">
        <img src="{{ URL::asset('assets/imgs/logo-usemoda.png') }}">
        <h1>Crie sua Loja no Maior Marketplace de Moda do Brasil!</h1>
        <h2>Sem complicações e em poucos minutos</h2>
    </div>

    <form name="formloja" id="formloja">

    {{ csrf_field() }}

    <div class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li class="active"><a href="#step-1">
                    <h4 class="list-group-item-heading">Passo 1</h4>
                    <p class="list-group-item-text">Informações da Loja</p>
                </a></li>
                <li class="disabled"><a href="#step-2">
                    <h4 class="list-group-item-heading">Passo 2</h4>
                    <p class="list-group-item-text">Sobre Você</p>
                </a></li>
                <li class="disabled"><a href="#step-3">
                    <h4 class="list-group-item-heading">Passo 3</h4>
                    <p class="list-group-item-text">Endereço</p>
                </a></li>
            </ul>
        </div>
    </div>
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12 well">

                <div class="col-lg-12">
                    <h1>Dê um nome a sua loja</h1>
                    <h3>Esta Informação Pode ser Alterada a Qualquer Momento!</h3>
                    <div class="col-md-4 col-md-offset-4 nomeloja">
                        <div class="input-group">
                          <input name="nomeloja" id="nomeloja" type="text" class="form-control" placeholder="sualoja" aria-describedby="basic-addon2">
                          <span class="input-group-addon" id="basic-addon2">.usemoda.com.br</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-4 text-center" id="loading"></div>
                </div>
                <div class="col-lg-12 text-center">
                    <button id="activate-step-2" class="btn btn-success btn-lg">Continuar <i class="fa fa-chevron-right" aria-hidden="true"></i></button>                   
                </div>

            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well">

                <div class="col-lg-12">
                    <h1>Quem é Você</h1>
                    <h3>Esta Informação Pode ser Alterada a Qualquer Momento!</h3>
                    <div class="col-md-8 col-md-offset-2">

                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Pessoa Física</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pessoa Jurídica</a></li>
                          </ul>

                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="form-group row">
                                  <div class="col-md-12">
                                    <input name="cpf" id="cpf" type="email" class="form-control text-center" id="inputEmail3" placeholder="CPF">
                                  </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="form-group row">
                                  <div class="col-md-12">
                                    <input name="cnpj" id="cnpj" type="email" class="form-control text-center" id="inputEmail3" placeholder="CNPJ">
                                  </div>
                                </div>                                
                            </div>
                          </div>

                    </div>
                </div>

                <div class="col-lg-12 text-center">
                    <button id="activate-step-3" class="btn btn-success btn-lg">Continuar <i class="fa fa-chevron-right" aria-hidden="true"></i></button>                   
                </div>

                <div class="alert alert-warning alert-warning-loja col-md-10 col-md-offset-1 text-center" role="alert">
                    <strong>Aviso Importante</strong>
                    <p>De acordo com o Decreto Federal nº 7962/13, todas as lojas virtuais precisam apresentar número de CPF ou CNPJ no rodapé, isso confere segurança e credibilidade aos seus clientes.</p>
                    <p>Caso necessite fazer a troca de CPF por CNPJ você poderá fazer esta alteração diretamente em seu painel USEMODA.</p>
                </div>


            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well">

                <div class="col-lg-12">
                    <h1>Localização</h1>
                    <h3>Esta Informação Pode ser Alterada a Qualquer Momento!</h3>
                    <div class="col-md-4 col-md-offset-4 nomeloja">
                        <div class="input-group">
                          <input name="cep" id="cep" type="text" class="form-control" placeholder="CEP" aria-describedby="basic-addon2">
                          <span class="input-group-addon" id="basic-addon2">CEP</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-4 text-center" id="loading"></div>
                </div>
                <div class="col-lg-12 text-center">
                    <button id="activate-step-4" class="btn btn-success btn-lg">Finalizar <i class="fa fa-chevron-right" aria-hidden="true"></i></button>                   
                </div>

            </div>
        </div>
    </div> 



</div>

@endsection

@section('script')
<script>
$(document).ready(function() {
    
    var navListItems = $('ul.setup-panel li a'),
        allWells = $('.setup-content');

    allWells.hide();

    navListItems.click(function(e)
    {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this).closest('li');
        
        if (!$item.hasClass('disabled')) {
            navListItems.closest('li').removeClass('active');
            $item.addClass('active');
            allWells.hide();
            $target.show();
        }
    });
    
    $('ul.setup-panel li.active a').trigger('click');
    

    $('#activate-step-2').on('click', function(e) {


        var $inputs = $('#formloja :input');

        var values = {};
        $inputs.each(function() {
            values[this.name] = $(this).val();
        });

        var nomeloja, token;

        nomeloja = values.nomeloja;
        token    = values._token;
        url      = '{{route('nomeLojaExiste')}}';
        data     = {nomeloja: nomeloja};

        if(nomeloja==''){
            $('#loading').html('<p class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Digite o nome do domínio</p>');
            return false;
        }

        $('#loading').html('<img src="{{ URL::asset('assets/imgs/spinner.gif') }}" />');

        $.ajax({
            url: url,
            headers: {'X-CSRF-TOKEN': token},
            data: data,
            type: 'post',
            datatype: 'json',
            success: function (resp) {
                
                console.log(resp);

                if(resp.status>=1){
                    $('#loading').html('<p class="alert alert-danger" role="alert"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Este Nome de Dominio já Existe</p>');
                    return false;
                }else{
                    $('#loading').html('<p class="alert alert-success" role="alert"><i class="fa fa-check-circle" aria-hidden="true"></i> Domínio Disponivel</p><p><img src="{{ URL::asset('assets/imgs/spinner.gif') }}" /></p>');

                    setTimeout( function(){
                        $('ul.setup-panel li:eq(1)').removeClass('disabled');
                        $('ul.setup-panel li a[href="#step-2"]').trigger('click');
                        $(this).remove();
                    }, 3000); //3 seconds

                }
            }
        });

        return false;

    });

    $('#activate-step-3').on('click', function(e) {
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
        $(this).remove();
    });

    $('#activate-step-4').on('click', function(e) {
        window.location = "{{URL('/login')}}";
        return false;
    });

});    
</script>

<script src="{{ URL::asset('assets/jsc/jquery.mask.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#cpf').mask('000.000.000-00', {reverse: true});
        $('#cnpj').mask('00.000.000/0001-00', {reverse: true});
    });
</script>


@endsection