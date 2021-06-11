<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaoFamiliaCadastrada extends Model
{
    use HasFactory;

    protected $table = "acao_familias_cadastradas";

    public function acao()
    {
        return $this->belongsTo(Acoes::class, 'acao', 'id');
    }

    public function familia()
    {
        return $this->belongsTo(Familia::class, 'familia', 'id');
    }
}
