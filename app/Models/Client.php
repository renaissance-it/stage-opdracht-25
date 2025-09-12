<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'city',
        'postal_code',
        'state',
        'country',
        'company',
        'vat_number',
    ];

    /**
     * Get the subscriptions for the client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions() : \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    /**
     * Get the domain name registrations for the client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function domains() : \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DomainNameRegistration::class);
    }
}
