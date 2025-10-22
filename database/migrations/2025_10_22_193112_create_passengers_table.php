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
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade'); // En caso de que la reserva se borre, se borra el pasajero
            $table->string('names');
            $table->string('lastname');
            $table->date('birth_date');
            $table->enum('gender', ['M', 'F', 'Other']);
            $table->enum('doc_typ', ['C.C', 'C.E', 'T.I']);
            $table->string('identity');
            $table->string('tel', 11);
            $table->boolean('infant')->default(false);
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passengers');
    }
};
