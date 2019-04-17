<?php

namespace App\Models\Terminales;

use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'description',
        'img',
        'home_img',
        'go_home',
        'copy',
        'benefits',
        'state',
        'colors',
        'screen_size',
        'front_cam',
        'back_cam',
        'os',
        'memory',
        'extensible_memory',
        'height',
        'width',
        'depth',
        'battery',
        'cash_price',
        'from_price',
        'updated_by',
    ];

    protected $casts = [
        'colors' => 'array'
    ];
}
