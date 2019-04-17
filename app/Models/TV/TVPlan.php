<?php

namespace App\Models\TV;

use Illuminate\Database\Eloquent\Model;

class TVPlan extends Model
{
    protected $fillable = [
        'name',
        'copy',
        'benefits',
        'cost',
        'conditions',
    ];

    public function canales()
    {
        return $this->belongsToMany(Canal::class);
    }
}
