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
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // Automatische Primärschlüssel-ID
            $table->string('username', 50); // Benutzername
            $table->string('firstname', 50); // Vorname
            $table->string('lastname', 50); //Nachname
            $table->string('mobile'); // Handynummer
            $table->string('email')->unique(); // E-Mail-Adresse (eindeutig)
            $table->string('password'); // Verschlüsseltes Passwort
            $table->timestamps(); // Erstellt created_at & updated_at Spalten
            $table->softDeletes(); //Fügt ein deleted_at-Feld hinzu, um den Benutzer „sanft“ zu löschen.
            $table->foreignId('address_id')->nullable()->constrained()->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
