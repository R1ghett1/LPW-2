<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_usuario';


    protected $fillable = [
        'nome_usuario',
        'email_usuario',
        'senha_usuario',
        'tipo_usuario',
    ];
}
