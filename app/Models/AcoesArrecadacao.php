<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcoesArrecadacao extends Model
{
    use HasFactory;

    protected $table = "acoes_arrecadacoes";

    public function acao()
    {
        return $this->belongsTo(Acoes::class, 'acao', 'id');
    }
}
