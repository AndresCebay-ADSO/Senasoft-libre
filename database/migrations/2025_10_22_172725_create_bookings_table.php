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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            //  Vinculamos la reserva a un usuario
            $table->foreignId('user_id')
                  ->nullable() // la reserva se dara aun asi no tenga un usuario, esto para los usuarios no registrados
                  ->constrained()
                  ->onDelete('set null'); // Si el usuario se borra, la reserva se mantiene (pero sin el FK)

            $table->string('code', 10)->unique();
            $table->dateTime('date');
            
            // Datos del pagador
            $table->string('payer_name', 50);
            $table->string('payer_doc_type', 5);
            $table->string('payer_identity', 30);
            $table->string('payer_email', 70);
            $table->string('payer_phone', 20)->nullable();
            
            $table->boolean('terms_accepted')->default(false);
            $table->decimal('price_total', 10, 2);
            $table->enum('status', ['pendiente', 'confirmado', 'cancelado', 'pagado'])->default('pendiente');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
