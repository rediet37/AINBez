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
        Schema::table('news', function(Blueprint $table) {
            $table->string('title');
            $table->text('content');
            $table->string('cover_image_path')->nullable();
            $table->text('summary')->nullable();
            $table->integer('author_id');
            $table->json('tags')->nullable();
            $table->unsignedInteger('views_count')->default(0);

            //foreign key for author id
            $table->foreign('author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn(['title', 'content', 'summary', 'author_id', 'cover_image_path', 'date', 'tags', 'views_count']);
            $table->dropForeign(['author_id']);
        });
    }
};
