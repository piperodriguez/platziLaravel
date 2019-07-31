<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
  protected $table = 'gastos';
  protected $primaryKey = 'id';

  public function reporteGasto()
  {
    return $this->belongsTo(reporteGasto::class);

  }
}
