<div class="row">
	<div class="col">
		<h1>Reporte Gasto {{ $reporte->id }} : {{ $reporte->desc_gasto }} </h1>
	</div>
</div>
<div class="row">
	<div class="col">
		<h2>Gastos</h2>
		<table class="table">
			@foreach($reporte->gastos as $gasto)
				<tr>
					<td>{{ $gasto->descripcion }}</td>
				</tr>
			@endforeach
		</table>
	</div>
</div>