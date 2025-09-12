<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DomainNameRegistration extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'domain_name',
        'registration_date',
        'renewal_date',
        'expiration_date',
    ];

    /**
     * Get the client that owns the domain name registration.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get the domain name registration plan that owns the domain name registration.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function price_plan() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(DomainNameRegistrationPlan::class);
    }
}
