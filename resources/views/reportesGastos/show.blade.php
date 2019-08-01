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
  <div class="col">
    <h3>Detalles</h3>
    <table class="table">
      <thead>
        <tr>
          <th>Fecha Gasto</th>
          <th>Descripcion</th>
          <th>Valor</th>
        </tr>
      </thead>
      @foreach ($reporte->gastos as $gasto)
        <tr>
          <td>{{ $gasto->created_at }}</td>
          <td>{{ $gasto->descripcion }}</td>
          <td><b>$</b>&nbsp;{{ $gasto->valor }}</td>
        </tr>
      @endforeach
    </table>
  </div>
</div>
<div class="row">
  <div class="col">
    <a href="/controlGastos/{{ $reporte->id }}/gasto/create" class="btn btn-dark">Nuevo Gasto</a>
  </div>
</div>
@endsection
