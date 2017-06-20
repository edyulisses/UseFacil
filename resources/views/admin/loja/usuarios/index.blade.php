@extends('admin.layouts.app')

@section('style')
<!-- MENU ACTIVE -->
<style>
#loja-usuarios{
    border-left: 3px solid orange;
}
</style>
@endsection

@section('content')
<section>
	<div class="row">
    	<h1><i class="fa fa-user-plus" aria-hidden="true"></i> Usuários</h1>
    </div>
</section>
@endsection

@section('script')
    <!-- Menu Toggle Script -->
    <script>
        $(document).ready(function () {
        	$('.tree-toggler#loja').parent().children('ul.tree').toggle(150);
        });
    </script>
@endsection