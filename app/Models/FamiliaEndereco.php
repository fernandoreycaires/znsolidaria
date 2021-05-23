<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliaEndereco extends Model
{
    use HasFactory;

    protected $table = "familias_enderecos";

    public function familia()
    {
        return $this->belongsTo(Familia::class, 'id', 'familia');
    }
    
}
