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

    public function comunidade_responsavel()
    {
        return $this->hasMany(ComunidadeResponsavel::class, 'comunidade', 'id');
    }

    public function comunidade_telresponsavel()
    {
        return $this->hasMany(ComunidadeTelResponsavel::class, 'comunidade', 'id');
    }

    public function comunidade_emailresponsavel()
    {
        return $this->hasMany(ComunidadeEmailResponsavel::class, 'comunidade', 'id');
    }

    public function familia()
    {
        return $this->hasMany(Familia::class, 'comunidade', 'id');
    }
}
