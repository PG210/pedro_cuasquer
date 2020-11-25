@extends('layouts.master')
@section('content')
<br>
<h4>Para contactar a nuestros asesores puede realizarlo por medio de llamadas telefonicas, visitando nuestra tienda,
enviando un correo electronico o simplemente llenando el formulario</h4>
<br>
<form>
<div class="container alert alert-primary">
<div class="form-group">
    <label for="formGroupExampleInput">Nombres</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Apellidos</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo electronico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Celular</label>
    <input type="number" class="form-control" id="formGroupExampleInput2" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Caja de comentarios</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Verificar datos</label>
  </div>
  <button type="submit" class="btn btn-primary ">Enviar</button>
  </div>
</form>
<br>

@stop