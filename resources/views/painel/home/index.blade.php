@extends('painel.templates.template')

@section('content')
<div class="relatorios">
	<div class="container">
		<ul class="relatorios">
			<li class="col-md-6 text-center">
				<a href="">
					<img src="{{ url('assets/painel/imgs/noticias-acl.png') }}" alt="Posts" class="img-menu">
					<h1>{{ $tot->posts }}</h1>
				</a>
			</li>
			<li class="col-md-6 text-center">
				<a href="">
					<img src="{{ url('assets/painel/imgs/funcao-acl.png') }}" alt="Roles" class="img-menu">
					<h1>{{ $tot->roles }}</h1>
				</a>
			</li>
			<li class="col-md-6 text-center">
				<a href="">
					<img src="{{ url('assets/painel/imgs/permissao-acl.png') }}" alt="Permissions" class="img-menu">
					<h1>{{ $tot->permissions }}</h1>
				</a>
			</li>
			<li class="col-md-6 text-center">
				<a href="">
					<img src="{{ url('assets/painel/imgs/perfil-acl.png') }}" alt="Users" class="img-menu">
					<h1>{{ $tot->users }}</h1>
				</a>
			</li>
		</ul>
	</div>
</div><!--Relatorios-->
@endsection
