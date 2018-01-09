<?php

namespace domun\Http\Controllers;

use Illuminate\Http\Request;
use domun\Produto;
use Illuminate\Support\Facades\DB;

class VitrineController extends Controller
{
    //
    public function mostraVitrine($categoria,$id)
    {
       $produto = DB::select('select * from produtos where id_categoria = ? and id_sub_categoria = ?',[$categoria,$id]);

      return view('vitrine.vitrine',compact('produto'));
    }
}
