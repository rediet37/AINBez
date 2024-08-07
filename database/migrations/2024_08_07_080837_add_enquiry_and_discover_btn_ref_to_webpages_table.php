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
        Schema::table('webpages', function (Blueprint $table) {
            $table->string('enquiry_btn_ref')->nullable();
            $table->string('discover_btn_ref')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('webpages', function (Blueprint $table) {
            $table->dropColumn(['enquiry_btn_ref', 'discover_btn_ref']);
        });
    }
};
