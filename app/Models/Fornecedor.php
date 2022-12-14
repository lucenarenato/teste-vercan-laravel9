<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{

    protected $table = 'fornecedores';

    protected $fillable = [
        'cnpj',
        'razao_social',
        'nome_fantasia',
        'indicador_estadual',
        'inscricao_estadual',
        'inscricao_municipal',
        'situacao_cnpj',
        'recolimento',
        'ativo_juridico',
        'cpf',
        'nome',
        'apelido',
        'rg',
        'ativo_fisico',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'ponto_referencia',
        'uf',
        'cidade',
        'condominio',
        'observacao',
    ];

    public function contatoPrincipal()
    {
        return $this->hasMany('App\Models\ContatoPrincipal');
    }
}
