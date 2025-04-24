<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_path',
        'position',
        'listing_id',
    ];
    public function listing(): BelongsTo
    {
        return $this->belongsTo(related: Listing::class);
    }

    protected $casts = [
        'image_path' => 'string',
        'position' => 'integer',
    ];
}
/*
use App\Models\Image;

$image = Image::create([
    'listing_id' => $listing->id,
    'position' => 0,
    'image_path' => 'uploads/iphone16.jpg'
]);
*/