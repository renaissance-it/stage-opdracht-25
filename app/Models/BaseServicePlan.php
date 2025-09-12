<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseServicePlan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'base_service_plans';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    /**
     * Get the service plans associated with the base service plan.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicePlans() : \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ServicePlan::class, 'base_service_plan_id');
    }
}
