@extends('layouts.base')
@section('contenedor')

<div class="row">
  <div class="col">
    <h1>Editando Gasto {{ $reporte->id }}</h1>
  </div>
</div>
<div class="row">
  <div class="col">
    <a href="{{ route('controlGastos.index') }}" class="btn btn-dark">Listado de Gastos</a>
  </div>
</div>
<div class="row">
  <div class="col">
    <form action="{{ route('controlGastos.update', ['id' => $reporte->id]) }}" method="POST">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="desc_pago">Descripción Gasto</label>
        <input type="text" class="form-control" name="desc_pago" id="desc_pago" value="{{ $reporte->desc_gasto }}">
      </div>
      <button type="submit" class="btn btn-danger">Salvar</button>
    </form>
  </div>
</div>

@endsection
