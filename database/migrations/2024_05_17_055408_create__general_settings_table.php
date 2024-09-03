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
        Schema::create('_general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('E-bazar_logo_site');
            $table->string('home_page_banner');
            $table->integer('contact_info');
            $table->string('email');
            $table->text('address');
            $table->string('social_media');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_general_settings');
    }
};
