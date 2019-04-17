<?php

namespace App\Models\InternetFijo;

use Illuminate\Database\Eloquent\Model;

class InternetFijo extends Model
{
	 protected $fillable = [
        'name',
        'description',
        'img',
        'copy',
        'benefits',
        'conditions',
        'pdf_conditions',
        'updated_by',
    ];
}
