@extends('layouts.master')
@section('content')
<!--carrucel-->
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <h1 class="text-center">BIENVENIDOS A NUESTRA TIENDA</h1>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('img/carrucel1.jpg')}}" class="d-block w-100" alt="..." width="500" height="600">
    </div>
    <div class="carousel-item">
      <img src="{{url('img/carrucel3.jpg')}}" class="d-block w-100" alt="..." width="500" height="600">
    </div>
    <div class="carousel-item">
      <img src="{{url('img/carrucel4.jpg')}}" class="d-block w-100" alt="..." width="500" height="600">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--end carrucel-->
<br>
<p class="alert alert-primary"> La tienda para mascotas " QUIERO A MI MASCOTA", lleva 12 años en el mercado como tienda fisica 
 y actualmente ofrece sus productos de manera virutual, llegando a la mayoria de nuestros clientes a nivel nacional.
 Adquiere tus productos para que tu mascota se sienta feliz y por cada compra podras acumular puntos que los puedes
 canjear con juguetes para tu mascota.
</p>
</div>
@stop