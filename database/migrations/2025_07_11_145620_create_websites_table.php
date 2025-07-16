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
         Schema::create('websites', function (Blueprint $table) {
        $table->id();
        $table->string('website_name');
        $table->string('website_number')->nullable();
        $table->string('website_email')->nullable();
        $table->string('website_fb')->nullable();
        $table->string('website_insta')->nullable();
        $table->string('website_in')->nullable();
        $table->text('website_address')->nullable();
        $table->text('footer_about')->nullable();
        $table->text('about_us')->nullable();
        $table->string('about_us_heading')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
