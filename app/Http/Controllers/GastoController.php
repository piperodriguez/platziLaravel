<?php

namespace App\Http\Controllers;
use App\Models\Gastos;
use App\Models\reporteGasto;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $id_reporte = $id;

        $reporte = reporteGasto::findOrFail($id);
        return view('gastos.create',[
          'id_reporte' => $id_reporte,
          'reporte' => $reporte
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $id = $request->reporte_gasto_id;
      $gasto = new Gastos();
      $gasto->reporte_gasto_id = $request->reporte_gasto_id;
      $gasto->descripcion = $request->descripcion;
      $gasto->valor = $request->valor;
      $gasto->save();

      return redirect('/controlGastos/'.$id);

      //$gasto->reporte_gasto_id =
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
