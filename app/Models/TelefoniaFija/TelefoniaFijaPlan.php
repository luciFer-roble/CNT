<?php

namespace App\Models\TelefoniaFija;

use Illuminate\Database\Eloquent\Model;

class TelefoniaFijaPlan extends Model
{
    protected $fillable = [
        'name',
        'description',
        'img',
        'copy',
        'benefits',
        'note',
        'state',
        'type',
        'conditions',
    ];
}
