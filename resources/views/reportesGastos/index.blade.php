@extends('layouts.base')
@section('contenedor')
  <div class="row">
    <div class="col">
      <h1>Reporte de gastos</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a href="{{ route('controlGastos.create') }}" class="btn btn-dark">
        Nuevo Gasto
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table">
        <thead>
          <tr>
            <th>Descripción Gasto</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($reportes as $reporte)
          <tr>
            <td>
              <a href="{{ route('controlGastos.show', [$reporte->id]) }}">{{$reporte->desc_gasto}}</a>
            </td>
            <td>
              <a href="{{ route('controlGastos.edit', [$reporte->id]) }}" class="btn btn-xs btn-dark">Actualizar</a>
            </td>
            <td>
              <a href="controlGastos/{{ $reporte->id }}/confirmarDelete" class="btn btn-xs btn-danger">Eliminar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
