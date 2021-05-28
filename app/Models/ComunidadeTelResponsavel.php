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
        return $this->belongsTo(ComunidadeResponsavel::class, 'resp_comunidade', 'id');
    }

    public function comunidade()
    {
        return $this->belongsTo(Comunidade::class, 'comunidade', 'id');
    }

}
