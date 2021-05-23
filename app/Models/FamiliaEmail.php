<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliaEmail extends Model
{
    use HasFactory;

    protected $table = "familias_emails";

    public function familia()
    {
        return $this->belongsTo(Familia::class, 'id', 'familia');
    }
    
}
