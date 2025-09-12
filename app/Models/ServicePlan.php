<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePlan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'base_service_plan_id',
    ];

    /**
     * Get the base service plan that owns the service plan.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function base_plan() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(BaseServicePlan::class);
    }

    /**
     * Get the subscriptions for the service plan.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions() : \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Subscription::class);
    }
}
