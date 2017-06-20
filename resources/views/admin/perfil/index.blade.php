@extends('admin.layouts.app')

@section('style')
<style>
	
</style>
@endsection

@section('content')
<section>
	<div class="row">
	    <h1>Perfil do Usuário</h1>
	</div>

	@foreach($users as $user)

		<div class="row">
			<div class="panel panel-default">
	            <div class="panel-heading">
	              <h3 class="panel-title">{{ $user->name }}</h3>
	            </div>
	            <div class="panel-body">
	              <div class="row">
	                <div class="col-md-3 col-lg-3 " align="center"> 
	                	<img alt="User Pic" src="{{ URL::asset('assets/imgs/avatar.png') }}" class="img-circle img-responsive"> 
	                </div>
	                <div class=" col-md-9 col-lg-9 "> 
	                  <table class="table table-user-information">
	                    <tbody>
	                      <tr>
	                        <td>Criado</td>
	                        <td>{{ dateUsToBr($user->created_at) }}</td>
	                      </tr>
	                      <tr>
	                        <td>Atualizado</td>
	                        <td>{{ dateUsToBr($user->updated_at) }}</td>
	                      </tr>
	                      <tr>
	                        <td>Email</td>
	                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
	                      </tr>
	                      <tr>
	                        <td>Telefones</td>
	                        <td>
	                        	<i class="fa fa-phone" aria-hidden="true"></i> {{ $user->phone }} (Telefone)<br>
	                        	<i class="fa fa-mobile" aria-hidden="true"></i> {{ $user->cellphone }} (Celular)
	                        </td>      
	                      </tr>
	                      <tr>
	                        <td>WhatsApp</td>
	                        <td><i class="fa fa-whatsapp" aria-hidden="true"></i> {{ $user->whatsapp }}</td>      
	                      </tr> 
	                    </tbody>
	                  </table>
	                </div>
	              </div>
	            </div>
	        </div>
		</div>

	@endforeach

</section>
@endsection

@section('script')
@endsection