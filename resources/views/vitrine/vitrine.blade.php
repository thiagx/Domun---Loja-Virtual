@extends('layouts.app')
@section('content')
<!--CARD DO PRODUTO-->
<div class="container">
  <div class="grid_produto">
    <div class="row">
      <ul>

        @for($i = 0; $i < 20; $i++)
        <div class=" col-sm-4 col-md-3">
          <li>
            <div class="card_produto">
              <div id="card_id" class="card_image_frame">
                <div class="img_sup">
                  <img src="{{asset('img/img_produto/p1.jpg')}}" alt="">
                </div>
                <div class="img_inf">
                  <img src="{{asset('img/img_produto/p1_c.jpg')}}" alt="">
                </div>

              </div>
              <div class="card_desc">
                <h4>Domun White Elegant</h4>
                <div class="card_valor">
                  <span id="valor">R$ 70,00</span>
                  <span>à vista</span>
                </div>
              </div>
            </div>
          </li>
        </div>
        @endfor



      </ul>
    </div>
  </div>
</div>





@stop
