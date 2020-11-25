@extends('layouts.master')
@section('content')
<br>
<!--tarjetas 3 primeras-->
<div class="row">
  <div class="col-sm-4">
   <!--inicio tarjeta-->
    <div class="card text-white bg-success" style="width: 18rem;">
    <img src="{{url('img/img1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$msj}}</h5>
        <p class="card-text">
      <!--llamar a imprimir datos-->
                @foreach($r as $i)<!-- $r es el identificador enviado del controlador, $i variable para imprimir-->
                {!!$i!!} 
                <br><!--imprime los datos en lista -->
                @endforeach
               
        </p>
        <a href="#" class="btn btn-primary">Comprar</a>
    </div>
    </div>
<!--end tarjeta-->
  </div>
  <div class="col-sm-4">
  <div class="card text-white bg-success" style="width: 18rem;">
    <img src="{{url('img/img2.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"> {!!$mensaje!!} </h5>
        <p class="card-text">
        @foreach($dato as $h)<!-- $r es el identificador enviado del controlador, $i variable para imprimir-->
                {!!$h!!} 
                <br><!--imprime los datos en lista -->
        @endforeach
        </p>
        <a href="#" class="btn btn-primary">Comprar</a>
    </div>
    </div>
  </div>
  <div class="col-sm-4">
  <div class="card text-white bg-success" style="width: 18rem;">
    <img src="{{url('img/img3.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{!!$m1!!}</h5>
        <p class="card-text">
        @foreach($dat1 as $h)<!-- $r es el identificador enviado del controlador, $i variable para imprimir-->
                {!!$h!!} 
                <br><!--imprime los datos en lista -->
        @endforeach
        </p>
        <a href="#" class="btn btn-primary">Comprar</a>
    </div>
    </div>
  </div>
</div>
<!--end tarjetas-->
<br>
<!--tarjetas 3 segundas-->
<div class="row">
  <div class="col-sm-4">
   <!--inicio tarjeta-->
    <div class="card text-white bg-success" style="width: 18rem;">
    <img src="{{url('img/casa.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{!!$m2!!}</h5>
        <p class="card-text">
        @foreach($dat2 as $h)<!-- $r es el identificador enviado del controlador, $i variable para imprimir-->
                {!!$h!!} 
                <br><!--imprime los datos en lista -->
        @endforeach
        </p>
        <a href="#" class="btn btn-primary">Comprar</a>
    </div>
    </div>
    
<!--end tarjeta-->
  </div>
  <div class="col-sm-4">
  <div class="card text-white bg-success" style="width: 18rem;">
    <img src="{{url('img/correa.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{!!$m3!!}</h5>
        <p class="card-text">
        @foreach($dat3 as $h)<!-- $r es el identificador enviado del controlador, $i variable para imprimir-->
                {!!$h!!} 
                <br><!--imprime los datos en lista -->
        @endforeach
        </p>
        <a href="#" class="btn btn-primary">Comprar</a>
    </div>
    </div>
  </div>
  <div class="col-sm-4">
  <div class="card text-white bg-success" style="width: 18rem;">
    <img src="{{url('img/juguete1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{!!$m4!!}</h5>
        <p class="card-text"> 
        @foreach($dat4 as $h)<!-- $r es el identificador enviado del controlador, $i variable para imprimir-->
                {!!$h!!} 
                <br><!--imprime los datos en lista -->
        @endforeach
        </p>
        <a href="#" class="btn btn-primary">Comprar</a>
    </div>
    </div>
  </div>
</div>
<!--end tarjetas-->
<br>
</div>
<!--end tarjetas-->

@stop