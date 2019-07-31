<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reporteGasto extends Model
{
    protected $table = 'reporte_gastos';
    protected $primaryKey = 'id';

    //relacion
    public function gastos()
    {
      return $this->hasMany(Gastos::class);
    }


}
