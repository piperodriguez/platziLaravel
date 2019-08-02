@extends('layouts.base')
@section('contenedor')
  <div class="row">
    <div class="col">
      <h1>Enviar Reporte</h1>
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
      <form action="{{ route('send.email', ['id' => $reporte->id]) }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
        </div>
        <button type="submit" class="btn btn-danger">Enviar Email</button>
      </form>
    </div>
  </div>
@endsection
