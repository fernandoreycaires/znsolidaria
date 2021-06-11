<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaoFamiliaNaoCadastrada extends Model
{
    use HasFactory;

    protected $table = "acao_familias_nao_cadastradas";

    public function acao()
    {
        return $this->belongsTo(Acoes::class, 'acao', 'id');
    }

}
