<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'customer_id',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(related: Customer::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(related: Image::class);
    }

    public function favoritedBy(): BelongsToMany
    {
        return $this->belongsToMany(Customer::class, 'favorites');
    }

    public function getCoverImagePathAttribute(): string
    {
        return $this->images->where('position', 0)->first()?->image_path ?? 'placeholder.jpg';
    }
}

/*use App\Models\Listing;

$listing = Listing::create([
    'name' => 'Obstplantage',
    'description' => 'Super schön gelegen mit verschiednen obstpflanzen',
    'price' => 1500.00,
    'customer_id' => 1
]);*/