<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    protected $fillable = [
        'street',
        'house_number',
        'postal_code',
        'city',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(related: Customer::class);
    }
}