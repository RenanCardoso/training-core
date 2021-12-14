@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
          <div class="card-header"><h4>Funções de Usuário</h4></div>
            <div class="card-body">
                <a class="btn btn-primary mb-3" href="{{ route('roles.create') }}">Adicionar</a>
                <br>
                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>
                                    {{ $role->name }}
                                </td>
                                <td>
                                    <a href="{{ route('roles.show', $role->id ) }}" class="btn btn-primary">Ver Detalhe</a>
                                </td>
                                <td>
                                    <a href="{{ route('roles.edit', $role->id ) }}" class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                <form action="{{ route('roles.destroy', $role->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger">Remover</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')

@endsection
