@extends('layouts.adminapp')
@section('content')
<div class="content_produto">
  <div class="container">
    <div class="panel panel-default">
      <form class="" action="{{url('/produto/adiciona')}}" method="post">

      <div class="panel-heading">
          <h3 class="panel-title"><strong>Adicionar Produto</strong></h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <input type="file" name="foto" value="">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Nome</label>
              <input class="form-control input-sm" type="text" name="nome" value="">
            </div>
          </div>

          <div class="col-md-4">
            <label for="">Preço</label>
            <div class="input-group">
              <span class="input-group-addon ">$</span>
              <input name="preco" type="text" class="form-control input-sm" aria-label="Amount (to the nearest dollar)">
            </div>
          </div>
        </div>

        <div class="row">


          <div class="col-md-4">
            <div class="form-group">
              <label for="">Categoria</label>
              <select class="form-control" name="categoria">
                @foreach($categoria as $c)
                <<option value="{{$c->id}}">{{$c->nome}}</option>
                @endforeach
              </select>
            </div>

          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label for="">Estoque</label>
              <input  class="form-control" type="number" name="estoque" value="">
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label for="">Estoque min</label>
              <input class="form-control" type="number" name="estoque_min" value="">
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label for="">Frete Grátis</label><br>
              <div class="material-switch pull-right form-control">
                <input id="someSwitchOptionDefault" name="frete" type="checkbox"/>
                <label for="someSwitchOptionDefault" class="label-default"></label>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label for="">Peso</label>
              <input class="form-control" type="text" name="peso" value="">
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Descrição</label>
              <textarea name="descricao" rows="8" cols="80"></textarea>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="">Disponível para venda</label><br>
              <div class="material-switch pull-right form-control">
                <input id="someSwitchOptionSuccess" name="disponivel" type="checkbox"/>
                <label for="someSwitchOptionSuccess" class="label-success"></label>
              </div>
            </div>
          </div>
        </div>

        <button class="btn btn-primary" type="submit" name="button">Adicionar Produto</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
    </form>
    </div>
  </div>
</div>
</div>

@stop
