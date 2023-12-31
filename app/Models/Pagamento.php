<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;
    protected $table = 'pagamentos';

     public function comanda()
    {
        return $this->belongsTo(Comanda::class, 'comanda_id', 'id');
    }




}
