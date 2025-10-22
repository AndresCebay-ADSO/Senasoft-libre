<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->string('name', 50);
            $table->string('lastname', 50);

            $table->enum('doc_type', ['C.C', 'C.E', 'T.I']);
            $table->string('identity', 20)->unique();

            $table->string('email', 70)->unique();
            $table->timestamp('email_verified_at')->nullable();

            $table->string('password');

            $table->enum('role', ['admin', 'passenger'])->default('passenger');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
