<?php

namespace domun;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table = "categorias";
    protected $fillable = ['nome'];
    protected $guarded = ['id'];
    public $timestamps = false;

    public function Listar()
    {
      return $this->all();
    }

    public function ListarSubCat()
    {
      return $this->hasMany(SubCategoria::class);
    }

}
