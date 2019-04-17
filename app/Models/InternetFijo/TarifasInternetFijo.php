<?php

namespace App\Models\InternetFijo;

use Illuminate\Database\Eloquent\Model;

class TarifasInternetFijo extends Model
{
	 protected $fillable = [
        'name',
        'internet_plan_id',
        'type',
        'technology',
        'iva',
        'ice',
        'cost',
        'download',
        'upload',
        'instalation_cost',
    ];
}
