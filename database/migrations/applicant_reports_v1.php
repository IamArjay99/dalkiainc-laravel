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
        Schema::create('applicant_reports', function (Blueprint $table) {
            $table->id();
            $table->integer('career_id')->nullable();
            $table->string('job_title')->nullable();
            $table->string('full_name')->nullable();
            $table->string('email_address')->nullable();
            $table->string('subject')->nullable();
            $table->text('message')->nullable();
            $table->text('resume')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_reports');
    }
};
