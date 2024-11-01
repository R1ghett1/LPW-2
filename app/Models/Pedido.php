<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pedido', 
        'id_usuario',
        'status',
        'status_pedido',
    ];
    

    protected $table = 'pedidos'; // Nome da tabela
    protected $primaryKey = 'id_pedido'; // ou o nome correto da coluna


    public function itensPedidos()
{
    return $this->hasMany(ItensPedido::class, 'pedido_id'); // Altere 'id_usuario' para 'pedido_id'
}


    public static function consultaId($where) {
        $pedido = self::where($where)->first(['id_pedido']); // Altere 'id' para 'id_pedido'
        return !empty($pedido->id_pedido) ? $pedido->id_pedido : null; // Altere 'id' para 'id_pedido'
    }
    
    
}
