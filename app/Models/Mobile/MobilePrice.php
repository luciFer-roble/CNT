<?php

namespace App\Models\Mobile;

use Illuminate\Database\Eloquent\Model;

class MobilePrice extends Model
{
    protected $fillable = [
        'name',
        'cost',
        'gigs',
        'whatsapp',
        'facebook',
        'instagram',
        'twitter',
        'deezer',
        'minutes',
        'free_minutes',
    ];

    public function plans()
    {
        return $this->belongsToMany(MobilePospagoPlan::class);
    }
}
