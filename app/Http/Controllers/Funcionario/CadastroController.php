<?php

namespace App\Http\Controllers\Funcionario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use DB;
use Auth;
use App\Model\Funcionario;
use App\Model\Telefone;

class CadastroController extends Controller
{
    public function IndexNovoCadastro(){
        return view('funcionario.cadastrar');
    }

    public function CadastrarNovoFuncionario(Request $req){
        
        $user = new Funcionario();
        $telefone = new Telefone();
        
        $user->nome = $req->nome;
        $user->email = $req->email;
        $user->profissao = $req->profissao;

        if($req->hasFile('foto')) {
            $foto = $req->file('foto');
            $num = rand(1111, 9999);
            $dir = "img/cursos";
            $ex = $foto->guessClientExtension();
            $nomeFoto = "foto" . $num . "." . $ex;
            $foto->move($dir, $nomeFoto); 
            $user['foto'] = $dir."/".$nomeFoto;
        }

        $user->idade = $req->idade;
        $user->sexo = $req->sexo;

        if(Funcionario::Cadastra() != null) { //traz o último id da tabela "dados_funcionarios" para inserir no "id_funcionario" da tabela "telefone_funcionario"
            $controle = Funcionario::Cadastra();
            $controle = $controle[0]->id;
            $controle++;
        }else{
            $controle = 1;
        }

        $telefone->celular1 = $req->celular1;
        $telefone->celular2 = $req->celular2;
        $telefone->telefone1 = $req->telefone1;
        $telefone->telefone2 = $req->telefone2;
        $telefone->idfuncionario = $controle;
        
        $user->cpf = $req->cpf;
        $user->cidade = $req->cidade;
        $user->endereco = $req->endereco;
        $user->cep = $req->cep;

        if($user->save() & $telefone->save()){
            Session::flash('message', 'O funcionário foi cadastrado com sucesso!');
            Session::flash('alert-class', 'alert-success');
        } else {
            Session::flash('message', 'Erro ao adicionar funcionário!');
            Session::flash('alert-class', 'alert-danger');
        }

        return redirect()->route('site.home');

    }
    
    public function detalhes($id){
        $registro = Funcionario::dados($id);
        return view('funcionario.editarfuncionario', compact('registro'));
    }

    public function EditarFuncionario(Request $request, $id){
        
        $usuario = $request->all();
        $telefone = $request->all();
        $data = $request->except('_token');

        if($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $num = rand(1111, 9999);
            $dir = "img/cursos";
            $ex = $foto->guessClientExtension();
            $nomeFoto = "foto" . $num . "." . $ex;
            $foto->move($dir, $nomeFoto); 
            $data['foto'] = $dir."/".$nomeFoto;
        }
        
        if(Funcionario::salva($id, $data)) {
            Session::flash('message', 'O funcionário foi atualizado com sucesso!');
            Session::flash('alert-class', 'alert-success');
        }else{
            Session::flash('message', 'Erro ao atualizar funcionário!');
            Session::flash('alert-class', 'alert-danger');
        }
        
        return redirect()->route('site.home');
    }

    public function excluir($id){
        if(Funcionario::find($id)->delete()){
            Session::flash('message', 'O funcionário foi deletado com sucesso!');
            Session::flash('alert-class', 'alert-success');
          }
          else{
            Session::flash('message', 'Erro ao deletar funcionário!');
            Session::flash('alert-class', 'alert-danger');
          }
        return redirect()->route('site.home');
    }
}
