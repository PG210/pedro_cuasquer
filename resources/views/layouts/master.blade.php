<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quiero a mi mascota</title>
        <link href="{{url('/assets/bootstrap/css/bootstrap.min.css')}}"rel="stylesheet">

    </head>
    <body>
    @include('partials.navigation')
    <div class="container">
        @yield('content')
    </div>
    <!--footer-->
    <style type="text/css">
    .footer {
    background-image: url("https://i.stack.imgur.com/AZ2Xw.png");
    background-position: center center;
    background-repeat: no-repeat;
    width: 100%;
    min-height: 300px;
    }
    </style>
    <footer class="footer">
  <div class="container text-white">
    <br>
    <div class="row">
      <div class="col-12 col-md-4 col-lg-2">
        <h4>Facebook</h4>
        <p><i class="fab fa-facebook"></i> <a href="#">tienda mascotas</a></p>
      </div>
      <div class="col-12 col-md-4 col-lg-4">
        <h4 id="contacto">Contacto</h4>
        <p>Pupiales-Nariño-Colombia</p>
        <p>Direcci&oacute;n: Barrio la Uni&oacute;n - Cra 7 No 3-20 <br> Cel:3235456789:
          <br> eMail: tiendamascotas@gmail.com
        </p>
      </div>
    </div>
  </div>
</footer>
    <!--end--footer-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> 
    <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
