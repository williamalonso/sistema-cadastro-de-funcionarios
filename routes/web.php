<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', ['as'=>'site.home', 'uses'=>'Site\HomeController@index']);
Route::get('/tela/cadastrar', ['as'=>'site.cadastrar', 'uses'=>'Funcionario\CadastroController@IndexNovoCadastro']);
Route::post('/cadastrar/funcionario', ['as'=>'cadastrar.funcionario', 'uses'=>'Funcionario\CadastroController@CadastrarNovoFuncionario']);
Route::get('/detalhes/funcionario/{id}', ['as'=>'detalhes.funcionario', 'uses'=>'Funcionario\CadastroController@detalhes']);
Route::post('/editar/cadastro/funcionario/{id}', ['as'=>'editar.funcionario', 'uses'=>'Funcionario\CadastroController@EditarFuncionario']);
Route::get('/excluir/{id}', ['as'=>'excluir', 'uses'=>'Funcionario\CadastroController@excluir']);
