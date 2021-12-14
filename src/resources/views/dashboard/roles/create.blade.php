@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
        @endif
        <form method="POST" action="{{ route('roles.store') }}">
          @csrf
          <div class="card">
            <div class="card-header">
              <h5><b>Criar Nova Função de Usuário</b></h5>
              <p>Selecione quais as funcionalidades do painel o usuário terá acesso.</p>
              <small>Campos com asterísco são obrigatórios.</small> <span class="asterisco">*</span>
            </div>

            <div class="card-body">
              <div class="form-group">
                <label for="nf-nome">Nome</label><small class="asterisco"><b> *</b></small>
                <input class="form-control" id="nf-nome" type="nome" name="nf-nome" placeholder="Nome da função do usuário">
              </div>
              <div class="form-group">
                <label for="nf-descricao">Descrição</label>
                <input class="form-control" id="nf-descricao" type="descricao" name="nf-descricao" placeholder="Se precisar, faça uma descrição da função do usuário...">
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-success" type="submit">Salvar</button>
              <a class="btn btn-primary" href="{{ route('roles.index') }}">Voltar</a>
            </div>
          </div>

          <div class="form-check checkbox">
            <input class="form-check-input" id="check-selecionar-todos" type="checkbox" value="">
            <label class="form-check-label" for="check-selecionar-todos">Selecionar Todos</label>
          </div>

          <div class="cards-funcoes">
            <div class="row">
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-header">
                    <div class="form-check checkbox">
                      <input class="form-check-input" id="check-all-usuario" type="checkbox" value="">
                      <label class="form-check-label" for="check-all-usuario">Função de Usuário</label>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <div class="col-md-9 col-form-label">
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check1-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check1-usuario">Visualizar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check2-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check2-usuario">Adicionar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check3-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check3-usuario">Editar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check4-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check4-usuario">Remover</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-header">
                    <div class="form-check checkbox">
                      <input class="form-check-input" id="check-all-usuario" type="checkbox" value="">
                      <label class="form-check-label" for="check-all-usuario">Usuários</label>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <div class="col-md-9 col-form-label">
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check1-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check1-usuario">Visualizar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check2-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check2-usuario">Adicionar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check3-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check3-usuario">Editar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check4-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check4-usuario">Remover</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-header">
                    <div class="form-check checkbox">
                      <input class="form-check-input" id="check-all-usuario" type="checkbox" value="">
                      <label class="form-check-label" for="check-all-usuario">Dashboard</label>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <div class="col-md-9 col-form-label">
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check1-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check1-usuario">Visualizar</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-header">
                    <div class="form-check checkbox">
                      <input class="form-check-input" id="check-all-usuario" type="checkbox" value="">
                      <label class="form-check-label" for="check-all-usuario">Planos</label>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <div class="col-md-9 col-form-label">
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check1-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check1-usuario">Visualizar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check2-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check2-usuario">Adicionar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check3-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check3-usuario">Editar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check4-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check4-usuario">Remover</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-header">
                    <div class="form-check checkbox">
                      <input class="form-check-input" id="check-all-usuario" type="checkbox" value="">
                      <label class="form-check-label" for="check-all-usuario">Aparelhos</label>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <div class="col-md-9 col-form-label">
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check1-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check1-usuario">Visualizar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check2-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check2-usuario">Adicionar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check3-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check3-usuario">Editar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check4-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check4-usuario">Remover</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-header">
                    <div class="form-check checkbox">
                      <input class="form-check-input" id="check-all-usuario" type="checkbox" value="">
                      <label class="form-check-label" for="check-all-usuario">Treinos</label>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <div class="col-md-9 col-form-label">
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check1-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check1-usuario">Visualizar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check2-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check2-usuario">Adicionar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check3-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check3-usuario">Editar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check4-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check4-usuario">Remover</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-header">
                    <div class="form-check checkbox">
                      <input class="form-check-input" id="check-all-usuario" type="checkbox" value="">
                      <label class="form-check-label" for="check-all-usuario">Avaliação Médica</label>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <div class="col-md-9 col-form-label">
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check1-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check1-usuario">Visualizar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check2-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check2-usuario">Adicionar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check3-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check3-usuario">Editar</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="check4-usuario" type="checkbox" value="">
                          <label class="form-check-label" for="check4-usuario">Remover</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')


@endsection