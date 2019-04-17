<?php

namespace App\Models\TV\Canales;

use Illuminate\Database\Eloquent\Model;

class Canal extends Model
{
    protected $fillable =[
        'name',
        'number',
        'type',
        'category',
    ];

    public function plans()
    {
        return $this->belongsToMany(TVPlan::class);
    }
    //
}
