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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('phone')->unique();
            // $table->string('email')->nullable();
            // $table->string('password');
            $table->rememberToken();
            $table->string('zone');
            $table->string('woreda');
            $table->string('country')->default('ETHIOPIA');
            $table->timestamps();
            // $table->foreignId('type_id')->constrained();
            // $table->foreignId('region_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
