<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, SoftDeletes, Notifiable;

    /**
     * Die zugehörige Tabelle.
     */
    protected $table = 'customers';

    /**
     * Felder, die massenweise befüllbar sind.
     */
    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'email',
        'mobile',
        'password',
        'address_id',
    ];

    /**
     * Virtuelles Attribut „name“ aus Vor- und Nachname zusammengesetzt.
     */
    protected $appends = [
        'name'
    ];

    public function getNameAttribute(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    /**
     * Felder, die beim Serialisieren versteckt werden sollen.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Automatische Casts für Felder.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Ein Kunde gehört zu einer Adresse.
     */
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    /**
     * Ein Kunde kann viele Einträge (z. B. Anzeigen) haben.
     */
    public function listings(): HasMany
    {
        return $this->hasMany(Listing::class);
    }

    // Ein Customer kann mehrere Listings favorisieren
    public function favorites()
    {
        return $this->belongsToMany(Listing::class, 'favorites');
    }
}
/*
use App\Models\Customer;
$customer = Customer::create([
    'username' => 'Annanass',
    'firstname' => 'Anna',
    'lastname' => 'Obstkorb',
    'email' => 'anna@nassobst.com',
    'password' => bcrypt('gelbundstachlig'),
    'mobile' => '032456789',
    'address_id' => $address->id,
]);
*/