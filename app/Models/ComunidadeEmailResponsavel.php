<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComunidadeEmailResponsavel extends Model
{
    use HasFactory;

    protected $table = "comunidades_emailresponsavel"; 

    public function responsavel_comunidade()
    {
        return $this->belongsTo(ComunidadeResponsavel::class, 'resp_comunidade', 'id');
    }

    public function comunidade()
    {
        return $this->belongsTo(Comunidade::class, 'comunidade', 'id');
    }

}
