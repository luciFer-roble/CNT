<?php

namespace App\Models\Promociones;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = [
      'name',
      'description',
      'img',
      'copy',
      'state',
      'note',
      'tariff_sin_imp',
      'tariff_con_imp',
      'conditions',
    ];
}
