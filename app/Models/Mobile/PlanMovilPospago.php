<?php

namespace App\Models\Mobile;

use Illuminate\Database\Eloquent\Model;

class PlanMovilPospago extends Model
{
    protected $fillable = [
        'name',
        'copy',
        'description',
        'benefits',
        'img',
        'conditions',
        'pdf_conditions',
        'updated_by',
    ];

   public function prices () {
       return $this->belongsToMany(MobilePrice::class, 'mobile_pospago_plan_mobile_price_pivot', 'mobile_pospago_plan_id', 'mobile_price_id');
   }
}
