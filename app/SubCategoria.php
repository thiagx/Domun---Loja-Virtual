<?php

namespace domun;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class SubCategoria extends Model
{
    //
    protected $table = "sub_categorias";
    protected $fillable = ['nome','categoria_id'];
    public $timestamps = false;


}
