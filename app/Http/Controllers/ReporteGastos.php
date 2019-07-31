<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reporte_gasto;

class ReporteGastos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportes = reporte_gasto::all();
        return view('reportesGastos.index',[
          'reportes' => $reportes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('reportesGastos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validacion = $request->validate([
            'desc_gasto' => 'required|min:3'
        ]);

        $reporte = new reporte_gasto();
        $reporte->desc_gasto = $validacion['desc_gasto'];
        $reporte->save();

        return redirect('/controlGastos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //findOrFail si no existe arroja un mensaje
        $reporte = reporte_gasto::findOrFail($id);
        return view('reportesGastos.update',[
          'reporte' => $reporte
        ]);
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
        $reporte = reporte_gasto::find($id);
        $reporte->desc_gasto = $request->get('desc_pago');
        $reporte->save();
        return redirect('/controlGastos');
    }

    public function confirmarDelete($id)
    {
        $reporte = reporte_gasto::find($id);
        return view('reportesGastos.confirmDelete',[
            'reporte' => $reporte
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reporte = reporte_gasto::find($id);
        $reporte->delete();
        return redirect('/controlGastos');
    }
}
