<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_produto';

    protected $fillable = [
        'id_categoria',
        'nome_produto',
        'descricao_produto',
        'preco_produto',
        'estoque_produto',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}