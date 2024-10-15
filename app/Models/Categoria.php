<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public $table = 'CATEGORIA';
    public $primaryKey = 'CATEGORIA_ID';

    public function Produtos(){
        return $this->hasMany(Produto::class, 'CATEGORIA_ID', 'CATEGORIA_ID');
    }

    public function Imagens(){
        return $this->hasManyThrough(Imagem::class, Produto::class, 'CATEGORIA_ID', 'PRODUTO_ID', 'CATEGORIA_ID', 'PRODUTO_ID');
    }
}
