<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>{{$titulo or "Painel ACL - Curso de Laravel" }}</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!--Fonts-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!--CSS-->
	<link rel="stylesheet" href="{{ url('assets/painel/css/acl-painel.css') }}">

	<!--Favicon-->
	<link rel="icon" type="image/png" href="{{ url('assets/painel/imgs/favicon-acl.png') }}">
</head>
<body>
	<div class="menu">
		<ul class="menu col-md-12">
			<li class="col-md-2 text-center">
				<a href="{{ url('/painel') }}">
          <img src="{{ url('assets/painel/imgs/acl-branca.png') }}" alt="LaraMuic" class="logo">
				</a>
			</li>
			<li class="col-md-2 text-center">
				<a href="{{ url('/painel/users') }}">
          <img src="{{ url('assets/painel/imgs/perfil-acl.png') }}" alt="Meu Perfil" class="img-menu">
					<h1>Users</h1>
				</a>
			</li>
			@can('post-view')
				<li class="col-md-2 text-center">
					<a href="{{ url('/painel/posts') }}">
						<img src="{{ url('assets/painel/imgs/noticias-acl.png') }}" alt="Posts" class="img-menu">
						<h1>Posts</h1>
					</a>
				</li>
			@endcan
			<li class="col-md-2 text-center">
			  <a href="{{ url('/painel/roles') }}">
          <img src="{{ url('assets/painel/imgs/funcao-acl.png') }}" alt="Roles" class="img-menu">
					<h1>Roles</h1>
				</a>
			</li>
			<li class="col-md-2 text-center">
			  <a href="{{ url('/painel/permissions') }}">
          <img src="{{ url('assets/painel/imgs/permissao-acl.png') }}" alt="Permissions" class="img-menu">
					<h1>Permissions</h1>
				</a>
			</li>
			<li class="col-md-2 text-center">
			  <a href="{{ url('/logout') }}">
          <img src="{{ url('assets/painel/imgs/sair-acl.png') }}" alt="Logoff" class="img-menu">
					<h1>Logoff</h1>
				</a>
			</li>
		</ul>
	</div><!--Menu-->

	<div class="clear"></div>

	<!--Content Dinâmico-->
	@yield('content')

	<div class="clear"></div>

	<div class="footer actions">
		<div class="container text-center">
			<p class="footer">EspecializaTi - Todos os direitos reservados</p>
		</div>
	</div>


	<!--jQuery-->
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>