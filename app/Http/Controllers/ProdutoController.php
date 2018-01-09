<?php

namespace domun\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use domun\Categoria;
use domun\Produto;

class ProdutoController extends Controller
{
    //
    public function mostrarFormularioCadastro()
    {
      $categoria = DB::select('select nome,id from categorias');

      return view('admin.produto.novo',compact('categoria'));
    }

    public function adicionaProduto(Request $request)
    {

      $produto = new Produto();
      $produto->foto = Request::input('foto');
      $produto->nome = Request::input('nome');
      $produto->preco = Request::input('preco');
      $produto->id_categoria = Request::get('categoria');
      $produto->estoque = Request::input('estoque');
      $produto->estoque_min = Request::input('estoque_min');
      $produto->frete_gratis = Request::input('frete');
      $produto->peso = Request::input('peso');
      $produto->descricao = Request::input('descricao');
      $produto->disponivel = Request::input('disponivel');
      $produto->save();


      return redirect(
        action('ProdutoController@mostrarFormularioCadastro')
      );
    }
}
