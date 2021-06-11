<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    use HasFactory;

    protected $table = "familias";

    public function comunidade()
    {
        return $this->belongsTo(Comunidade::class, 'comunidade', 'id');
    }

    public function familia_email()
    {
        return $this->hasMany(FamiliaEmail::class, 'familia', 'id');
    }
    
    public function familia_endereco()
    {
        return $this->hasMany(FamiliaEndereco::class, 'familia', 'id');
    }

    public function familia_observacao()
    {
        return $this->hasMany(FamiliaObservacao::class, 'familia', 'id');
    }

    public function familia_telefone()
    {
        return $this->hasMany(FamiliaTelefone::class, 'familia', 'id');
    }

    public function familia_acoes()
    {
        return $this->hasMany(AcoesFamilia::class, 'familia', 'id');
    }

    public function acao_familias_cadastradas()
    {
        return $this->hasMany(AcaoFamiliaCadastrada::class, 'familia', 'id');
    }
}
