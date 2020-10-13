@extends('layout.index')
@section('titulo', 'Cadastrar Usuario')
@section('conteudo')

    <div class="card border-light">
        <div class="card-body">
            <section id="titulo">
                <h1 class="text-center pt-4">Inserir Dados</h1>
            </section>
        </div>
    </div>
    <div class="container">
        <form class="m-5" action="{{route('cadastrar.funcionario')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Nome</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control sem_numero" id="inlineFormInputGroup" tabindex="1" name="nome">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">E-mail</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" tabindex="2" name="email">
                </div>
            </div>
            
            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Profissão</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control sem_numero" id="inlineFormInputGroup" tabindex="3" name="profissao">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Foto</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="file" class="form-control" id="inlineFormInputGroup" name="foto" tabindex="4">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Idade</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="number" class="form-control" id="inlineFormInputGroup" tabindex="5" name="idade">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Sexo</label>
                <div class="col-lg-6 input-group mb-2">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="sexo" class="custom-control-input" tabindex="6" value="masculino">
                        <label class="custom-control-label" for="customRadioInline1">Masculino</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="sexo" class="custom-control-input" tabindex="7" value="feminino">
                        <label class="custom-control-label" for="customRadioInline2">Feminino</label>
                    </div>
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Celular</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control celular" id="inlineFormInputGroup" tabindex="8" name="celular1" placeholder="Ex: 93257-4578">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Outro Celular</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control celular" id="inlineFormInputGroup" tabindex="9" name="celular2" placeholder="Caso tenha" >
                </div>
            </div>
            
            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Telefone</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control telefone" id="inlineFormInputGroup" tabindex="10" name="telefone1" placeholder="Ex: 7455-0174">
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">Outro Telefone</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control telefone" id="inlineFormInputGroup" tabindex="11" name="telefone2" placeholder="Caso tenha" >
                </div>
            </div>

            <div class="form-group row mt-5 mb-5">
                <label class="col-lg-3 control-label text-lg-right pt-2" for="regiao_adm">CPF</label>
                <div class="col-lg-6 input-group mb-2">
                    <input type="text" class="form-control cpf" id="inlineFormInputGroup" tabindex="12" name="cpf">
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="form-group col-md-3">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control sem_numero" id="inputCity" tabindex="13" name="cidade">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" class="form-control" id="inputAddress" tabindex="14" name="endereco">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">CEP</label>
                    <input type="text" class="form-control cep" id="inputZip" tabindex="15" name="cep">
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