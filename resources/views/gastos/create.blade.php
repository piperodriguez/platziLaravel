@extends('layouts.base')
@section('contenedor')
<div class="row">
  <div class="col">
    <h1>Agregar gasto a {{$reporte->desc_gasto}}</h1>
  </div>
</div>
<div class="row">
  <div class="col">
    <a href="/controlGastos/{{ $id_reporte }}" class="btn btn-dark">Volver Al reporte</a>
  </div>
</div>
<div class="row">
  <div class="col">
    <!--Validaciones-->
    @if($errors->any())
      <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
      </div>
    @endif
    <form action="" method="POST">
      @csrf
      <input type="hidden" name="reporte_gasto_id" value="{{ $id_reporte }}">
      <div class="form-group">
        <label for="desc_gasto">Descripción</label>
        <input type="text" class="form-control" name="descripcion" id="desc_gasto" value="{{ old('descripcion') }}">
      </div>
      <div class="form-group">
        <label for="valor">Costo</label>
        <input type="text" name="valor" class="form-control" value="{{ old('valor') }}">
      </div>
      <button type="submit" class="btn btn-danger">Salvar</button>
    </form>
  </div>
</div>
@endsection
