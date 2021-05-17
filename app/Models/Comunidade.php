<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidade extends Model
{
    use HasFactory;

    protected $table = "comunidades"; 

    public function comunidade_endereco()
    {
        return $this->hasOne(ComunidadeEndereco::class, 'comunidade', 'id');
    }
}
