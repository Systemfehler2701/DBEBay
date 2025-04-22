<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    protected $fillable = [
        'url',
        'description',
        'position',
        'created',
        'updated',
    ];
    public function entry(): BelongsTo
    {
        return $this->belongsTo(related: Entry::class);
    }

    protected $casts = [
        'url' => 'string',
        'description' => 'string',
        'position' => 'int',
        'created' => 'datetime',
        'updated' => 'datetime',
    ];
}
