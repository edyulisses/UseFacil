@extends('auth.layouts.login')


@section('style')
<style>
    .login .login-header{
        margin-top:150px;
        margin-bottom:50px;
    }
    .login h1{
        font-weight: 100;
        text-align: center;
    }
    .login h2{
        font-weight: 300;
        text-align: center;
    }
    .login .form-control {
        border-radius: 0px;
        -webkit-box-shadow: 0px;
        box-shadow: inset 0px;
    }
    .login .btn-primary{
        width: 100%;
        border-radius: 0px;
        background-color: #000;
        border: 0px;
    }
    .login .btn-registrar{
        background-color: #2e6da4;
    }    
    .login .social{
        font-size:24px;
        color:#c0c0c0;
    }
    .login .copy{
        font-size:10px; 
        color:#adadad;
    }
    .login .alert {
        text-align: center;
        font-size: 17px;
    }
</style>
@endsection

@section('content')


<div class="col-lg-12 login">
    <div class="login-header">
        <h1>USEMODA MARKETPLACE</h1>
        <h2>Trocar a Senha</h2>
    </div>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/passwords/reset') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail</label>

            <div class="col-md-5">
                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Nova Senha</label>

            <div class="col-md-5">
                <input id="password" type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>
            <div class="col-md-5">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-5 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-refresh"></i> Trocar Senha
                </button>   
            </div>
        </div>

    </form>

    <div class="form-group">
        <div class="col-md-5 col-md-offset-4" style="text-align: center;">
            <p><a href="{{ url('/') }}"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> USEMODA Institucional</a></p>
            <p class="social">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </p>
            <p class="copy">&copy 2017 - USEMODA - Todos os Direitos Reservados</p>
        </div>
    </div>

</div>

@endsection


@section('script')

@endsection
