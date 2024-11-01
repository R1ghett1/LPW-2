<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensPedido extends Model
{
    use HasFactory;
    protected $table = 'itens_pedido';
    protected $primaryKey = 'id_itens_pedido';

    protected $fillable = [
        'id_pedido',
        'id_produto',
        'preco_unitario',
        'quantidade',
        'status' => 'RE'
    ];
 
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto','id_produto'); // usando "produto_id" para a chave estrangeira
    }

    public function pedido()
    {
        return $this->belongsTo(Produto::class, 'produto_id'); // usando "produto_id" para a chave estrangeira
    }
}
