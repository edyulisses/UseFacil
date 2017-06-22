@extends('institucional.layouts.app')

@section('style')
<style>
body {
    background-image: url( "{{ URL::asset('assets/imgs/index-background.jpg') }}" );
    background-repeat: no-repeat;
    background-size: cover;
}
.navbar-default {
    background-color: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.1);
}
.container .div {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    width:500px;
}
.container .div .acesso > a,
.container .div .registro > a{
    text-decoration: none;
}
.container .div .acesso > a > div,
.container .div .registro > a > div{
	background-color: rgba(255, 255, 255, 0.5);
    padding: 40px;
    font-size: 24px;
    font-weight: 300;
    color:#000;
}
.container .div .acesso > a > div:hover,
.container .div .registro > a > div:hover{
	background-color: rgba(0, 0, 0, 0.9);
    color:#fff;
}

</style>
@endsection

@section('content')

<section>
	<div class="container">
		<div class="div">
			<div class="col-md-6 text-center acesso" id="acesso">
				<a href="{{ url('/login') }}"><div>Acesso</div></a>
			</div>
			<div class="col-md-6 text-center registro">
				<a href="{{ url('/register') }}"><div>Registro</div></a>
			</div>
		</div>
    </div>
</section>

@endsection

@section('script')

@endsection