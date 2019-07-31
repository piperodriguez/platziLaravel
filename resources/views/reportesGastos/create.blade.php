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
      <form action="{{ route('controlGastos.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="desc_gasto">Descripción Gasto</label>
          <input type="text" class="form-control" name="desc_gasto" id="desc_gasto" value="{{ old('desc_gasto') }}">
        </div>
        <button type="submit" class="btn btn-danger">Salvar</button>
      </form>
    </div>
  </div>
@endsection
