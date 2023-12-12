<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comanda_item extends Model
{
    use HasFactory;
    protected $table = 'comanda_itens';
    public function prato()
    {
        return $this->belongsTo(Prato::class, 'prato_id', 'id');
    }
    public function comada()
    {
        return $this->belongsTo(Comanda::class, 'comanda_id', 'id');
    }

}
