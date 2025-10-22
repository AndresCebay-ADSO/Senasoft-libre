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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('identifier', 50)->unique();
            $table->string('origin', 50);
            $table->string('destination', 50);
            $table->datetime('departure');
            $table->datetime('arrival');
            $table->enum('status', ['pendiente', 'cancelado', 'programado', 'despegado', 'finalizado'])->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
