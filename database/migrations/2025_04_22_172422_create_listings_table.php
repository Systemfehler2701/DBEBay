<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    use SoftDeletes;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name des Artikels
            $table->text('description'); // Beschreibung des Artikels
            $table->decimal('price', 10, 2); // Preis des Artikels
            $table->timestamps(); // Erstellt created_at & updated_at Spalten
            $table->foreignId('customer_id')->constrained()->onDelete('cascade'); // Besitzer des Listings
            $table->softDeletes(); // Fügt ein deleted_at-Feld hinzu
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
