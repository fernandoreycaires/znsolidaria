<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcoesFamilia extends Model
{
    use HasFactory;

    protected $table = "acoes_familias";

    public function familia()
    {
        return $this->belongsTo(Familia::class, 'id', 'familia');
    }

    public function acao()
    {
        return $this->belongsTo(Acoes::class, 'id', 'acao');
    }
}
