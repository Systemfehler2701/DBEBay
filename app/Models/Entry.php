<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entry extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(related: User::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(related: Image::class);
    }
}
