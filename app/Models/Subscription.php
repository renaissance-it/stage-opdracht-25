<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'domain_name',
        'status',
        'start_date',
        'end_date',
        'invoiceInterval',
    ];

    /**
     * Get the client that owns the subscription.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get the service plan associated with the subscription.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function servicePlan() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ServicePlan::class);
    }

    /**
     * Get the server associated with the subscription.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function server() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Server::class);
    }

    /**
     * Get the domain aliases associated with the subscription.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function domain_aliases() : \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DomainAlias::class);
    }
}
