<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DomainAlias extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'domain_name',
    ];

    /**
     * Get the subscription that owns the domain alias.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subscription() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Subscription::class);
    }
}
