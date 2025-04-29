<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    protected $fillable = [
        'street',
        'house_number',
        'postal_code',
        'city',
    ];

    public function customers(): HasMany
    {
        return $this->HasMany(Customer::class);
    }
}