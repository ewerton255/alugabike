@extends('template')

@section('conteudo')
<center>
<h1 style="font-weight:bold; color:green;">GALERIA DE FOTOS</h1>
</center>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/foto01.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/foto02.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/foto03.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/foto04.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/foto05.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/foto06.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
@stop