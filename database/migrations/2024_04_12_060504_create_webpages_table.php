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
        Schema::create('webpages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('color')->default('#000000')->nullable();
            $table->string('color2')->default('#000000')->nullable();
            $table->json('slides')->nullable();
            $table->json('industries')->nullable();
            $table->json('features')->nullable();
            $table->string('services_header')->default('Our services')->nullable();
            $table->json('services')->nullable();
            $table->json('faqs')->nullable();

            $table->string('slide1_header')->nullable();
            $table->string('slide1_sub')->nullable();
            $table->string('slide2_header')->nullable();
            $table->string('slide2_sub')->nullable();
            $table->string('slide3_header')->nullable();
            $table->string('slide3_sub')->nullable();
            
            $table->string('about_page_header')->nullable();
            $table->text('about_page_header_desc')->nullable();
            $table->string('about_us_title1')->nullable();
            $table->string('about_us_desc1')->nullable();
            $table->string('about_us_title2')->nullable();
            $table->string('about_us_desc2')->nullable();
            $table->string('about_value_title1')->nullable();
            $table->string('about_value_desc1')->nullable();
            $table->string('about_value_title2')->nullable();
            $table->string('about_value_desc2')->nullable();
            $table->string('about_value_title3')->nullable();
            $table->string('about_value_desc3')->nullable();
            $table->string('about_mission_statement')->nullable();
            $table->string('about_mission_desc')->nullable();

            $table->string('contact_page_header')->default('')->nullable();
            $table->string('contact_office')->default('Afia Mall 4th Floor, Addis Ababa, Ethiopia.')->nullable();
            $table->string('contact_office_hours')->default('Mon - Fri: 9:00am to 5:00pm')->nullable();
            $table->string('contact_front_desk_phone')->default('+251-91-128-9095')->nullable();
            $table->string('contact_front_desk_email')->default('contact@aingroup.ae')->nullable();
            $table->string('contact_building')->default('Afia Mall')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webpages');
    }
};
