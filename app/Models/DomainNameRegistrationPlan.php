<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DomainNameRegistrationPlan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'tld',
        'description',
        'price',
    ];
}
