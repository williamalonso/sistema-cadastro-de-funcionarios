<?php

namespace App\Model;
use DB;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = "dados_funcionarios";
    protected $fillable = [
        'nome', 'email', 'profissao', 'foto', 'idade', 'sexo', 'celular1', 'celular2', 'telefone1', 'telefone2', 'cpf', 'cidade', 'endereco', 'cep',
    ];

    public static function lista() { //faz o join entre as duas tabelas e lista os dados na home
        $conn = DB::connection('mysql')->select("SELECT * from dados_funcionarios as f left join telefone_funcionario as t on f.id = t.idfuncionario;"); 
        return $conn;
    }

    public static function dados($id) { //faz o join e lista os dados quando clicar no botão de "editar" na página home
        $conn = DB::table('dados_funcionarios')
                        ->select('*')
                        ->from('dados_funcionarios')
                        ->leftjoin('telefone_funcionario', 'telefone_funcionario.idfuncionario', '=', 'dados_funcionarios.id')
                        ->where('dados_funcionarios.id', '=', $id)
                        ->first();
        return $conn;
    }

    public static function cadastra() {
        $conn = DB::connection('mysql')->select("ALTER TABLE dados_funcionarios AUTO_INCREMENT = 0"); //reseta o auto_increment para o "id" da tabela "telefone_funcionario" ficar com o valor exato do último id inserido na tabela "dados_funcionarios"
        $conn = DB::connection('mysql')->select("ALTER TABLE telefone_funcionario AUTO_INCREMENT = 0"); //reseta o auto_increment do "id" da tabela "telefone_funcionario" quando eu excluir uma linha
        $conn = DB::connection('mysql')->select("SELECT id from dados_funcionarios order by id desc limit 1"); //envia o valor do último id da tabela "dados_funcionarios"
        return $conn;
    }

    public static function salva($id, $data) { //função para salvar os dados editados do funcionário
        $conn = DB::table('dados_funcionarios')
                        ->leftjoin('telefone_funcionario', 'telefone_funcionario.idfuncionario', '=', 'dados_funcionarios.id')
                        ->where('dados_funcionarios.id', '=', $id)
                        ->update($data);
        return $conn;
    }
}
