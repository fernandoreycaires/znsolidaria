<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliaObservacao extends Model
{
    use HasFactory;

    protected $table = "familias_observacoes";

    public function familia()
    {
        return $this->belongsTo(Familia::class, 'familia', 'id');
    }
    
}
