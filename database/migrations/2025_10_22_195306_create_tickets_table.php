<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->foreignId('flight_id')->constrained();
            $table->foreignId('passenger_id')->constrained();
            $table->foreignId('seat_id')->constrained();
            $table->string('code', 100)->unique(); // Código unico
            $table->enum('status', ['emitted', 'checked_in', 'used', 'canceled'])->default('emitted');
            
            // Evitaremos la doble venta de asiento para un vuelo
            $table->unique(['vuelo_id', 'asiento_id']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
