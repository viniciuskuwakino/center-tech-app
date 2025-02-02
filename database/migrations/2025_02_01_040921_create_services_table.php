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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('client_name', 100);
            $table->string('client_phone', 12);
            $table->string('device', 100);
            $table->string('brand', 100);
            $table->string('model', 100);
            $table->string('serial_number', 100);
            $table->text('description');
            $table->decimal('price', 9, 2);
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
