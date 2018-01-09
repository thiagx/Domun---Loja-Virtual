<?php

namespace domun;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $table = "produtos";
    protected $fillable = [
      'foto','nome','preco','categoria','estoque','estoque_min','frete_gratis','peso','descricao','disponivel'
    ];

    public $timestamps = false;
}
