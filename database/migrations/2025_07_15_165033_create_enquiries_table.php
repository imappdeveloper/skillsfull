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
        Schema::create('enquiries', function (Blueprint $table) {
             $table->id();
        $table->string('name');
        $table->string('email');
        $table->string('contact', 20); // You can adjust the length if needed
        $table->string('type'); // e.g., general, support, etc.
        $table->string('subject')->nullable();
        $table->text('message')->nullable();
        $table->enum('status', ['pending', 'resolved', 'closed'])->default('pending');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
