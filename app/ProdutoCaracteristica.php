<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class ProdutoCaracteristica extends Model
{
    protected $table = 'produto_caracteristicas'; 
    public $timestamps = false;
    protected $fillable = array('id_produto', 'peso', 'densidade', 'formato');

    protected $guarded = ['id', 'id_produto'];
}
