@extends('layout.index')
@section('titulo', 'Cadastro')
@section('conteudo')
    <main>
    <!-- Flash Message -->
        @if(Session::has('message'))
            @if(Session::get('message') == "Erro ao adicionar funcionário!")
                <p class="alert alert-danger text-center mt-2 alerta" role="alert">{{ Session::get('message') }}</p>
            @elseif(Session::get('message') == "Erro ao atualizar funcionário!")
                <p class="alert alert-danger text-center mt-2 alerta" role="alert">{{ Session::get('message') }}</p>
            @elseif(Session::get('message') == "Erro ao deletar funcionário!")
            <p class="alert alert-danger text-center mt-2 alerta" role="alert">{{ Session::get('message') }}</p>
            @else
                <p class="alert alert-success text-center mt-2 alerta" role="alert">{{ Session::get('message') }}</p>
            @endif
        @endif

    <!-- Texto -->
        <div class="card border-light">
            <div class="card-body">
                <section id="titulo">
                <h1 class="text-center pt-5">Sistema de Cadastro de Funcionários</h1>
                <p class="text-center text-secondary pb-5">Aqui você pode pesquisar os funcionários já cadastrados</p>
                </section>
            </div>
        </div>

    <!-- Tabela -->
        <div class="table-responsive">
            <table class="table text-center" id="tabela-principal">
                <thead>
                    <tr>
                    <th style="display: none">ID</th>
                    <th scope="col">Nome</th>
                    <th style="display: none">E-mail</th>
                    <th scope="col">Profissão</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Idade</th>
                    <th style="display: none">Sexo</th>
                    <th style="display: none">CPF</th>
                    <th style="display: none">Cidade</th>
                    <th style="display: none">Endereço</th>
                    <th style="display: none">Cep</th>
                    <th scope="col">Celular</th>
                    <th style="display: none">Outro Celular</th>
                    <th style="display: none">Telefone</th>
                    <th style="display: none">Outro Telefone</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $key)
                        <tr>
                            <td style="display: none">{{$key->id}}</td>
                            <td>{{$key->nome}}</td>
                            <td style="display: none">{{$key->email}}</td>
                            <td>{{$key->profissao}}</td>
                            <?php if(isset($key->foto)){ ?>
                                <td><img src="{{$key->foto}}" class="foto"></td>
                            <?php } else { ?>
                                <td>Não há foto deste funcionário</td>
                            <?php } ?>
                            <td>{{$key->idade}}</td>
                            <td style="display: none">{{$key->sexo}}</td>
                            <td style="display: none">{{$key->cpf}}</td>
                            <td style="display: none">{{$key->cidade}}</td>
                            <td style="display: none">{{$key->endereco}}</td>
                            <td style="display: none">{{$key->cep}}</td>
                            <td scope="col">{{$key->celular1}}</td>
                            <td style="display: none">{{$key->celular2}}</td>
                            <td style="display: none">{{$key->telefone1}}</td>
                            <td style="display: none">{{$key->telefone2}}</td>
                            <td>
                                <a href= "{{ route('detalhes.funcionario', $key->id) }}" type="button"  title="Editar" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                <a href= "{{ route('excluir', $key->id) }}" type="button"  title="Excluir" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>


@endsection