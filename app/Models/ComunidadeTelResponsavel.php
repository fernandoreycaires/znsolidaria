<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComunidadeTelResponsavel extends Model
{
    use HasFactory;

    protected $table = "comunidades_telresponsavel"; 

    public function responsavel_comunidade()
    {
        return $this->belongsTo(ComunidadeResponsavel::class, 'id', 'resp_comunidade');
    }

    public function comunidade()
    {
        return $this->belongsTo(Comunidade::class, 'id', 'comunidade');
    }

}
