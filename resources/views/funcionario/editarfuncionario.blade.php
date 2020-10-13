@extends('layout.index')
@section('titulo', 'Alterar Usuario')
@section('conteudo')

    <div class="card border-light">
        <div class="card-body">
            <section id="titulo">
                <h1 class="text-center pt-4">Alterar Dados</h1>
            </section>
        </div>
    </div>
    <div class="container">
        <form class="m-5" action="{{route ( 'editar.funcionario', $registro->id ) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Nome</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control sem_numero" id="inlineFormInputGroup" value="{{$registro->nome}}" tabindex="1" name="nome">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">E-mail</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="email" class="form-control" id="exampleInputEmail1" value="{{$registro->email}}" aria-describedby="emailHelp" tabindex="2" name="email">
                </div>
            </div>
            
            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Profissão</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control sem_numero" id="inlineFormInputGroup" value="{{$registro->profissao}}" tabindex="3" name="profissao">
                </div>
            </div>


            @if(isset($registro->foto))
                <div class="form-group row mt-5 mb-5">
                    <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Foto adicionada anteriormente</label>
                    <div class="col-lg-6 input-group mb-2">
                        <img width="150" src="{{asset($registro->foto)}}" />
                    </div>
                </div>
                <div class="form-group row mt-5 mb-5">
                    <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Foto</label>
                    <div class="col-lg-6 input-group mb-2">
                        <input type="file" class="form-control" id="inlineFormInputGroup" name="foto" tabindex="4">
                    </div>
                </div>
            @else
                <div class="form-group row mt-5 mb-5">
                    <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Foto</label>
                    <div class="col-lg-6 input-group mb-2">
                        <input type="file" class="form-control" id="inlineFormInputGroup" name="foto" tabindex="4">
                    </div>
                </div>
            @endif

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Idade</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="number" class="form-control" id="inlineFormInputGroup" value="{{$registro->idade}}" tabindex="5" name="idade">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Sexo</label>
                <div class="col-lg-6 input-group mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="sexo" class="custom-control-input" <?php if($registro->sexo == "Masculino"){ ?> checked <?php } ?> tabindex="6" value="masculino">
                        <label class="custom-control-label" for="customRadioInline1">Masculino</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="sexo" class="custom-control-input" <?php if($registro->sexo == "Feminino"){ ?> checked <?php } ?> tabindex="7" value="feminino">
                        <label class="custom-control-label" for="customRadioInline2">Feminino</label>
                    </div>
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Celular</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control celular" id="inlineFormInputGroup" value="{{$registro->celular1}}" tabindex="8" name="celular1">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Outro Celular</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control celular" id="inlineFormInputGroup" tabindex="9" value="{{$registro->celular2}}" name="celular2" placeholder="Opcional" >
                </div>
            </div>
            
            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Telefone</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control telefone" id="inlineFormInputGroup" tabindex="10" name="telefone1" value="{{$registro->telefone1}}">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Outro Telefone</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control telefone" id="inlineFormInputGroup" tabindex="11" value="{{$registro->telefone2}}" name="telefone2" placeholder="Opcional" >
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">CPF</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control cpf" id="inlineFormInputGroup" value="{{$registro->cpf}}" tabindex="12" name="cpf">
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="form-group col-md-3">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control sem_numero" id="inputCity" value="{{$registro->cidade}}" tabindex="13" name="cidade">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" class="form-control" id="inputAddress" value="{{$registro->endereco}}" tabindex="14" name="endereco">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">CEP</label>
                    <input type="text" class="form-control cep" id="inputZip" value="{{$registro->cep}}" tabindex="15" name="cep">
                </div>
            </div>

            <br>

            <div class="form-group row">
                <div class="col-sm-9 control-label text-lg-center pt-2">
                    <button class="btn btn-primary" tabindex="16">Enviar</button>
                    <button type="reset" class="btn btn-default" tabindex="17">Limpar</button>
                </div>
            </div>
        </form>
    </div>
    <br>
@endsection