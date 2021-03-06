<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acoes extends Model
{
    use HasFactory;

    protected $table = "acoes";

    public function comunidade()
    {
        return $this->belongsTo(Comunidade::class, 'comunidade', 'id');
    }

    public function acoes_arrecadacao()
    {
        return $this->hasMany(AcoesArrecadacao::class, 'acao', 'id');
    }

    public function acoes_familia()
    {
        return $this->hasMany(AcoesFamilia::class, 'acao', 'id');
    }

    public function acoes_local()
    {
        return $this->hasMany(AcoesLocal::class, 'acao', 'id');
    }

    public function acao_familias_cadastradas()
    {
        return $this->hasMany(AcaoFamiliaCadastrada::class, 'acao', 'id');
    }

    public function acao_familias_nao_cadastradas()
    {
        return $this->hasMany(AcaoFamiliaNaoCadastrada::class, 'acao', 'id');
    }
}
