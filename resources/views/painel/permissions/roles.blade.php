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
      roles the <b>{{ $permission->name }}</b>
    </h1>

    <table class="table table-hover">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th width="220px">Label</th>
        <th width="150px">Data</th>
        <th width="150px">Ações</th>
      </tr>

      @forelse($roles as $role)
        <tr>
          <td>{{ $role->id }}</td>
          <td>{{ $role->name }}</td>
          <td>{{ $role->label }}</td>
          <td>{{ $role->created_at }}</td>
          <td width="100px">
            <a href="{{ url("/painel/permission/$role->id/roles") }}" class="edit">
              <i class="fa fa-lock"></i>
            </a>
            <a href="{{ url("/painel/role/$role->id/edit") }}" class="edit">
              <i class="fa fa-pencil-square-o"></i>
            </a>
            <a href="{{ url("/painel/role/$role->id/delete") }}" class="delete">
              <i class="fa fa-trash"></i>
            </a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="90">Nwnhum role Cadastrado!</td>
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
