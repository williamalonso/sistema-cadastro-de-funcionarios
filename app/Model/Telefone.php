<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = "telefone_funcionario";
    protected $fillable = [
        'celular1', 'celular2', 'telefone1', 'telefone2',
    ];
}
