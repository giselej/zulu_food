<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;

    protected $table = 'comandas';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id', 'id');
    }

}
