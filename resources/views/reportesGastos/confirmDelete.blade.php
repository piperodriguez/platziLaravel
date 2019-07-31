@extends('layouts.base')
@section('contenedor')
<div class="row">
  <div class="col">
    <h1>Elimiar Gasto {{ $reporte->id }}</h1>
  </div>
</div>
<a href="{{ route('controlGastos.index') }}" class="btn btn-dark">Listado de Gastos</a>
<div class="row">
  <div class="col">
    <form action="{{ route('controlGastos.destroy', ['id' => $reporte->id]) }}" method="POST">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
  </div>
</div>

@endsection
