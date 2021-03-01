@extends('painel.templates.template')

@section('content')

  <!--Filters and actions-->
	<div class="actions">
		<div class="container">
			<a class="add" href="forms">
				<i class="fa fa-plus-circle"></i>
			</a>

			<form class="form-search form form-inline">
				<input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">
				<input type="submit" name="pesquisar" value="Encontrar" class="btn btn-success">
			</form>
		</div>
	</div><!--Actions-->

	<div class="clear"></div>

  <div class="container">
    <h1 class="title">
      Listagem dos Users
    </h1>

    <table class="table table-hover">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th width="220px">Email</th>
        <th width="150px">Data</th>
        <th width="140px">Ações</th>
      </tr>

      @forelse($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->created_at }}</td>
          <td>
            <a href="{{ url("/painel/user/$user->id/roles") }}" class="edit">
              <i class="fa fa-lock"></i>
            </a>
            <a href="{{ url("/painel/post/$user->id/edit") }}" class="edit">
              <i class="fa fa-pencil-square-o"></i>
            </a>
            <a href="{{ url("/painel/post/$user->id/delete") }}" class="delete">
              <i class="fa fa-trash"></i>
            </a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="90">Nwnhum Post Cadastrado!</td>
        </tr>
      @endforelse

    </table>


    <nav>
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
@endsection
