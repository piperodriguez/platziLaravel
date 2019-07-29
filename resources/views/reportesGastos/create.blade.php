@extends('layouts.base')
@section('contenedor')
  <div class="row">
    <div class="col">
      <h1>Agregar nuevo gasto</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a href="{{ route('controlGastos.index') }}" class="btn btn-dark">Volver</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <form action="{{ route('controlGastos.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="desc_pago">Descripción Gasto</label>
          <input type="text" class="form-control" name="desc_pago" id="desc_pago">
        </div>
        <button type="submit" class="btn btn-danger">Salvar</button>
      </form>
    </div>
  </div>
@endsection
