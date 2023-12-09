<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comanda_item extends Model
{
    use HasFactory;
    protected $table = 'comanda_itens';

    protected $fillable = ['id',];
}
