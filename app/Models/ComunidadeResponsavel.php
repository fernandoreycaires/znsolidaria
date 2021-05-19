<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComunidadeResponsavel extends Model
{
    use HasFactory;

    protected $table = "comunidades_responsavel"; 

    public function comunidade()
    {
        return $this->belongsTo(Comunidade::class, 'id', 'comunidade');
    }

    public function telefone_responsavel()
    {
        return $this->hasMany(ComunidadeTelResponsavel::class, 'comunidade', 'id');
    }

    public function email_responsavel()
    {
        return $this->hasMany(ComunidadeEmailResponsavel::class, 'comunidade', 'id');
    }

}
