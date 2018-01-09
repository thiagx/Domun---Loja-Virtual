@extends('layouts.app')
@section('content')
<!---->

<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

  <!-- Carousel items -->
  <div class="carousel-inner carousel-zoom">
    <div class="active item"><img class="img-responsive" src="{{asset('img/vitrine1.jpg')}}">
    </div>
    <div class="item"><img class="img-responsive" src="{{asset('img/vitrine2.jpg')}}">

    </div>
    <div class="item"><img class="img-responsive" src="{{asset('img/vitrine3.jpg')}}">
    </div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#carousel" data-slide="prev"></a>
  <a class="carousel-control right" href="#carousel" data-slide="next"></a>
</div>

<div class="container">
  <div class="row">
    <div class="vitrine">
      <div class="col-md-6 col-sm-10">
        <img class="img_vitrine" src="{{asset('img/vitrine4.jpg')}}" alt="">
        <p>Casual</p>
        <p class="caption">Estilo para festas e passeios casuais.</p>
        <button class="btn btn-mostrarmais" type="button" name="button">Mostrar mais</button>
      </div>
    </div>

    <div class="vitrine">
      <div class="col-md-6 col-sm-10">
        <img class="img_vitrine" src="{{asset('img/vitrine2.jpg')}}" alt="">
        <p>Rocker</p>
        <p class="caption">Para lugares mais fechados.</p>
        <button class="btn btn-mostrarmais" type="button" name="button">Mostrar mais</button>
      </div>
    </div>
  </div>
</div>


  <div class="row">
    <div class="vitrine">
      <div class="col-md-12 col-sm-12">
        <img  src="{{asset('img/vitrine8.jpg')}}" alt="">
        <p>Rocker</p>
        <p class="caption">Para lugares mais fechados.</p>
        <button class="btn btn-mostrarmais" type="button" name="button">Mostrar mais</button>
      </div>
    </div>
  </div>


@stop
