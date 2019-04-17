<?php

namespace App\Models\Mobile;

use Illuminate\Database\Eloquent\Model;

class PlanMovilPrepago extends Model
{
	 protected $fillable = [
        'name',
        'copy',
        'description', 
        'benefits',  
        'price',
        'iva',
        'ice',
        'conditions',
        'img',
        'pdf_conditions',
        'updated_by',
    ];
}
