<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComunidadeEndereco extends Model
{
    use HasFactory;

    protected $table = "comunidades_endereco"; 

    public function comunidade()
    {
        return $this->belongsTo(Comunidade::class, 'id', 'empresa');
    }
}
