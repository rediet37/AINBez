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
        Schema::create('hero_carousel', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->string('hero_text_title')->nullable();
            $table->string('hero_text_content')->nullable();
            $table->string('discover_url')->nullable();
            $table->string('download_url')->nullable();
            $table->string('enquiry_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_carousel');
    }
};
