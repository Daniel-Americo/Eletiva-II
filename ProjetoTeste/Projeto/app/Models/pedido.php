<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $table = "pedidos";
    public $incrementing = true;
    protected $fillable = ['status', 'total'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id'); // chave estrangeira, cliente enxerga categoria
    }

    public function itens(){
        return $this->hasMany(itensPedido::class, 'pedido_id');
    }
}
