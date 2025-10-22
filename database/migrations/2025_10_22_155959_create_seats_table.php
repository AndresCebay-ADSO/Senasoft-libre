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
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plane_id')->constrained();
            $table->enum('class',['business', 'plus', 'economic'])->default('economic');
            $table->string('code', 5);
            //esto es para que no suceda que el codigo del asiento se repita 
            $table->unique('plane_id', 'code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
