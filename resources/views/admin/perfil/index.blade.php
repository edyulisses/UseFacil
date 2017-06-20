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
	                        <td>{{ $user->created_at }}</td>
	                      </tr>
	                      <tr>
	                        <td>Atualizado</td>
	                        <td>{{ $user->updated_at }}</td>
	                      </tr>
	                      <tr>
	                        <td>Email</td>
	                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
	                      </tr>
	                      <tr>
	                        <td>Telefones</td>
	                        <td>
	                        	(011) 3543.1234 (Telefone)<br><br>
	                        	(011) 9 9999.9999 (Celular)
	                        </td>      
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