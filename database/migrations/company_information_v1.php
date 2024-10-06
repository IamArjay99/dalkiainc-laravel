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
        Schema::create('company_information', function (Blueprint $table) {
            $table->id();
            $table->text('company_overview')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->text('quality_policy')->nullable();
            $table->text('brief_description')->nullable();
            $table->text('address')->nullable();
            $table->text('contact_number')->nullable();
            $table->text('email_address')->nullable();
            $table->string('business_hours')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_information');
    }
};
