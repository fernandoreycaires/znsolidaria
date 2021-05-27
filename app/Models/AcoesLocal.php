<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcoesLocal extends Model
{
    use HasFactory;

    protected $table = "acoes_locais";

    public function acao()
    {
        return $this->belongsTo(Acoes::class, 'id', 'acao');
    }
}
