@extends('layouts.base')
@section('contenedor')

<div class="row">
  <div class="col">
    <h1> Gasto {{ $reporte->desc_gasto }}</h1>
  </div>
</div>
<div class="row">
  <div class="col">
    <a href="{{ route('controlGastos.index') }}" class="btn btn-dark">Listado de Gastos</a>
  </div>
</div>
<div class="row">
  <h1>mi ggorda bella es la mejor novela del mundo !!---</h1>
</div>

@endsection
